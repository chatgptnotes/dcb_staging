<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PricingPackage;
use App\Models\WPUsers;
use App\Services\Billing\EntitlementService;
use App\Services\Billing\CheckoutPaymentRecorder;
use App\Services\Billing\PackageCatalog;
use App\Services\Billing\PlanAgeEligibilityService;
use App\Services\Billing\StripePriceManager;
use App\Services\Billing\VoucherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Throwable;

/**
 * Native Stripe Checkout (Cashier) — used when PAYMENTS_DRIVER=cashier.
 * Under the default 'wp' driver the pricing page keeps the WooCommerce
 * sso_link buttons and these routes are simply not linked.
 */
class CheckoutController extends Controller
{
    public function __construct(
        private PackageCatalog $catalog,
        private EntitlementService $entitlements,
        private VoucherService $vouchers,
        private CheckoutPaymentRecorder $payments,
        private PlanAgeEligibilityService $ageEligibility,
    ) {
    }

    /**
     * Start a Stripe Checkout session for the given package slug.
     */
    public function checkout(string $package, Request $request)
    {
        if (! $this->catalog->isCashier()) {
            return redirect('/')->with('fail', 'Online checkout is not enabled.');
        }

        if (! $this->catalog->exists($package) || $package === $this->catalog->freeSlug()) {
            return redirect('/')->with('fail', 'Unknown package.');
        }

        // A guest must finish sign-up (and OTP when enabled) before we make
        // any Stripe request. This preserves their chosen package even when
        // Stripe is temporarily unavailable.
        if (! session('user_id')) {
            session(['intended_package' => $package]);

            return redirect('sign-up')->with('fail', 'Create your account to continue to secure checkout.');
        }

        $user = User::where('wp_user_id', session('user_id'))->first();
        if ($user === null) {
            session(['intended_package' => $package]);

            return redirect('sign-in')->with('fail', 'Please sign in again to continue to secure checkout.');
        }

        try {
            $this->ageEligibility->assertEligible(
                PricingPackage::where('slug', $package)->first(),
                $user->date_of_birth,
            );
        } catch (\RuntimeException $e) {
            return redirect()->route('public.plans')->with('fail', $e->getMessage());
        }

        // A local/admin-managed package may not have a Stripe price yet. Try
        // to create or repair it before deciding the plan is unavailable.
        $this->repairPackagePriceIfNeeded($package);

        $priceId = $this->catalog->stripePriceId($package);
        if ($priceId === null) {
            return redirect('/')->with('fail', 'This package is not available for purchase yet.');
        }

        $successUrl = route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl = route('checkout.cancel');

        // Pass the WP id so the webhook can attribute the purchase even if the
        // Stripe customer was created fresh.
        $metadata = ['wp_user_id' => (string) $user->wp_user_id, 'package' => $package];
        $voucher = null;
        if ($pendingVoucherId = (int) session('pending_checkout_voucher_id')) {
            try {
                $voucher = $this->vouchers->reserveCheckoutVoucher(
                    \App\Models\Voucher::findOrFail($pendingVoucherId),
                    $user,
                    $package
                );
                $metadata['voucher_id'] = (string) $voucher->id;
            } catch (\Throwable $e) {
                session()->forget('pending_checkout_voucher_id');
                return redirect('/')->with('fail', $e->getMessage());
            }
        }

        try {
            return $this->createCheckoutResponse($user, $package, $priceId, $successUrl, $cancelUrl, $metadata, $voucher?->stripe_promotion_code_id);
        } catch (\Throwable $e) {
            if ($this->isMissingStripeCustomerError($e) && !empty($user->stripe_id)) {
                $user->stripe_id = null;
                $user->save();

                try {
                    return $this->createCheckoutResponse($user, $package, $priceId, $successUrl, $cancelUrl, $metadata, $voucher?->stripe_promotion_code_id);
                } catch (\Throwable $retryException) {
                    $e = $retryException;
                }
            }

            \Log::error('Stripe checkout session creation failed', [
                'user_id' => $user->id,
                'package' => $package,
                'price_id' => $priceId,
                'error' => $e->getMessage(),
            ]);

            session(['intended_package' => $package]);

            return redirect('/')->with('fail', 'Checkout is temporarily unavailable. Please try Book Today again in a few minutes.');
        }
    }

    private function createCheckoutResponse(User $user, string $package, string $priceId, string $successUrl, string $cancelUrl, array $metadata, ?string $promotionCodeId = null)
    {
        $discount = $promotionCodeId ? ['discounts' => [['promotion_code' => $promotionCodeId]]] : [];
        if ($this->catalog->isSubscription($package)) {
            return $user->newSubscription($package, $priceId)
                ->checkout(array_merge([
                    'success_url' => $successUrl,
                    'cancel_url' => $cancelUrl,
                    'subscription_data' => ['metadata' => $metadata],
                    'metadata' => $metadata,
                ], $discount));
        }

        return $user->checkout([$priceId => 1], array_merge([
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'metadata' => $metadata,
            'mode' => 'payment',
        ], $discount));
    }

    private function repairPackagePriceIfNeeded(string $package): void
    {
        $adminPackage = PricingPackage::where('slug', $package)->first();
        if ($adminPackage === null) {
            return;
        }

        try {
            $result = app(StripePriceManager::class)->ensurePrice(
                $adminPackage,
                (string) $adminPackage->title,
                (float) $adminPackage->amount,
                (string) $adminPackage->currency,
                (string) $adminPackage->type,
                $adminPackage->billing_interval
            );

            if ($result->created || $result->replacedInvalid) {
                $adminPackage->stripe_price_id = $result->priceId;
                $adminPackage->stripe_product_id = $result->productId;
                $adminPackage->save();

                $this->catalog = new PackageCatalog();
            }
        } catch (\Throwable $e) {
            \Log::warning('Stripe price repair before checkout failed', [
                'package' => $package,
                'error' => $e->getMessage(),
            ]);
        }
    }

    private function isMissingStripeCustomerError(\Throwable $e): bool
    {
        return str_contains($e->getMessage(), 'No such customer');
    }

    public function success(Request $request)
    {
        // A Stripe payment proves a purchase, not the identity of this browser.
        $userId = (int) session('user_id');
        if ($userId <= 0) {
            return redirect('sign-in')->with('fail', 'Please sign in to your account to view your purchase.');
        }

        $sessionId = (string) $request->query('session_id');
        if ($sessionId === '') {
            return redirect('/')->with('fail', 'Payment could not be verified.');
        }

        try {
            $stripe = new \Stripe\StripeClient(config('cashier.secret'));
            $checkout = $stripe->checkout->sessions->retrieve($sessionId, []);
            $ownerId = (int) ($checkout->metadata->wp_user_id ?? 0);
            $user = User::where('wp_user_id', $userId)->first();
            if ($ownerId !== $userId || $user === null || strtolower((string) $user->status) !== 'active') {
                return redirect('/')->with('fail', 'This checkout does not belong to your signed-in account.');
            }

            $package = (string) ($checkout->metadata->package ?? '');
            if (! in_array($checkout->payment_status, ['paid', 'no_payment_required'], true)
                || ! $this->catalog->exists($package) || $package === $this->catalog->freeSlug()) {
                return redirect('/')->with('fail', 'Payment is not confirmed yet. Please try again shortly.');
            }

            // Keep the registered identity; checkout billing details cannot switch accounts.
            $this->entitlements->setPackage($userId, $package);
            $this->payments->recordSuccessfulCheckout($checkout->toArray());
            $this->vouchers->recordCheckoutRedemption($checkout->toArray());
            session()->forget('pending_checkout_voucher_id');

            return redirect('/questions/q1')->with('success', 'Payment successful. Start your assessment.');
        } catch (\Throwable $e) {
            \Log::warning('Checkout success verification failed', ['error' => $e->getMessage()]);

            return redirect('/')->with('fail', 'Payment could not be verified. Please contact support.');
        }
    }

    public function cancel(Request $request)
    {
        $this->vouchers->releaseReservation((int) session('pending_checkout_voucher_id'), (int) session('user_id'));
        session()->forget('pending_checkout_voucher_id');
        return redirect('/')->with('fail', 'Checkout cancelled.');
    }

    private function createOrLoginPaidCheckoutUser(object $session): ?User
    {
        $email = strtolower(trim((string) ($session->customer_details->email ?? '')));
        if ($email === '') {
            return null;
        }

        $name = trim((string) ($session->customer_details->name ?? ''));
        $customerId = is_string($session->customer ?? null) ? $session->customer : null;
        $dateOfBirth = $this->dateOfBirthFromSession($session);

        return DB::transaction(function () use ($email, $name, $customerId, $dateOfBirth) {
            $user = User::where('email', $email)->first();
            if ($user === null) {
                $user = new User();
                $user->wp_user_id = max((int) User::max('wp_user_id'), 1000000) + 1;
                $user->username = $this->uniqueUsername($email);
                $user->email = $email;
                $user->display_name = $name !== '' ? $name : Str::before($email, '@');
                $user->date_of_birth = $dateOfBirth;
                $user->password = Hash::make(Str::random(32));
                $user->user_role = '2';
                $user->status = 'active';
            }

            if ($user->wp_user_id === null) {
                $user->wp_user_id = max((int) User::max('wp_user_id'), 1000000) + 1;
            }

            if ($customerId !== null) {
                $user->stripe_id = $customerId;
            }

            if ($dateOfBirth !== null && $user->date_of_birth === null) {
                $user->date_of_birth = $dateOfBirth;
            }

            $user->save();

            return $user;
        });
    }

    private function createPendingCheckoutUser(): User
    {
        return DB::transaction(function () {
            $wpId = max((int) User::max('wp_user_id'), 1000000) + 1;

            $user = new User();
            $user->wp_user_id = $wpId;
            $user->username = 'checkout_'.$wpId;
            $user->email = 'checkout_'.$wpId.'@pending.decodemybrain.local';
            $user->display_name = 'Checkout User';
            $user->password = Hash::make(Str::random(32));
            $user->user_role = '2';
            $user->status = 'active';
            $user->save();

            return $user;
        });
    }

    private function finalizeCheckoutUser(int $wpId, object $session): ?User
    {
        $user = User::where('wp_user_id', $wpId)->first();
        if ($user === null) {
            return null;
        }

        $email = strtolower(trim((string) ($session->customer_details->email ?? '')));
        $name = trim((string) ($session->customer_details->name ?? ''));
        $customerId = is_string($session->customer ?? null) ? $session->customer : null;
        $dateOfBirth = $this->dateOfBirthFromSession($session);

        if ($email !== '') {
            $existing = User::where('email', $email)
                ->where('wp_user_id', '!=', $wpId)
                ->first();

            if ($existing !== null) {
                $user = $existing;
            } else {
                $user->email = $email;
            }
        }

        // A signed-up member's display name is their profile identity. Stripe
        // Checkout's billing name may be different (for example, a parent or
        // cardholder), so only use it to fill a missing legacy profile name.
        if ($name !== '' && trim((string) $user->display_name) === '') {
            $user->display_name = $name;
        }

        if ($dateOfBirth !== null) {
            $user->date_of_birth = $dateOfBirth;
        }

        if ($customerId !== null) {
            $user->stripe_id = $customerId;
        }

        $user->save();

        return $user;
    }

    private function dateOfBirthFromSession(object $session): ?string
    {
        foreach (($session->custom_fields ?? []) as $field) {
            if (($field->key ?? null) !== 'date_of_birth') {
                continue;
            }

            $value = trim((string) ($field->text->value ?? ''));
            if ($value === '') {
                return null;
            }

            try {
                return \Carbon\Carbon::parse($value)->format('Y-m-d');
            } catch (\Throwable) {
                return null;
            }
        }

        return null;
    }

    private function loginCheckoutUser(User $user): void
    {
        session()->regenerate();
        session(['user_id' => $user->wp_user_id]);
        session(['user_details' => [
            'id' => $user->wp_user_id,
            'username' => $user->username,
            'email' => $user->email,
            'display_name' => $user->display_name,
            'date_of_birth' => $user->date_of_birth,
            'billing_phone' => $user->billing_phone,
            'billing_country' => $user->billing_country,
        ]]);
        session(['user_dob' => $user->date_of_birth]);
    }

    private function syncWpMirror(User $user, string $package): void
    {
        $wp = WPUsers::where('user_id', $user->wp_user_id)->first();
        if ($wp === null) {
            $wp = new WPUsers();
            $wp->user_id = $user->wp_user_id;
        }

        $wp->email = $user->email;
        $wp->display_name = $user->display_name;
        $wp->date_of_birth = $user->date_of_birth;
        $wp->age = $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->age : null;
        $wp->package = $package;
        $wp->save();
    }

    private function uniqueUsername(string $email): string
    {
        $base = Str::slug(Str::before($email, '@'), '_') ?: 'user';
        $username = $base;
        $i = 1;

        while (User::where('username', $username)->exists()) {
            $username = $base.'_'.$i++;
        }

        return $username;
    }
}
