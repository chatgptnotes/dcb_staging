<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\User;
use App\Models\Voucher;
use App\Models\VoucherRedemption;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * Owns all voucher state transitions. Controllers must never mark a voucher
 * redeemed directly: this keeps email binding, expiry and race protection in
 * one place.
 */
final class VoucherService
{
    public function __construct(private readonly EntitlementService $entitlements)
    {
    }

    public function normalizeCode(string $code): string
    {
        return preg_replace('/[^A-Z0-9]/', '', strtoupper(trim($code))) ?: '';
    }

    public function hashCode(string $code): string
    {
        return hash_hmac('sha256', $this->normalizeCode($code), (string) config('app.key'));
    }

    public function findByCode(string $code): ?Voucher
    {
        return Voucher::where('code_hash', $this->hashCode($code))->first();
    }

    /** @return array{voucher: Voucher, code: string} */
    public function create(array $attributes, ?int $adminId): array
    {
        $code = $this->normalizeCode((string) ($attributes['code'] ?? ''));
        if ($code === '') {
            do {
                $code = strtoupper(Str::random(12));
            } while (Voucher::where('code_hash', $this->hashCode($code))->exists());
        }

        if (Voucher::where('code_hash', $this->hashCode($code))->exists()) {
            throw new RuntimeException('This voucher code already exists.');
        }

        $purpose = (string) $attributes['purpose'];
        $payload = [
            'code_hash' => $this->hashCode($code),
            'code_encrypted' => Crypt::encryptString($code),
            'code_hint' => substr($code, 0, 3).'•••'.substr($code, -3),
            'recipient_email' => strtolower(trim((string) $attributes['recipient_email'])),
            'package_slug' => $attributes['package_slug'],
            'purpose' => $purpose,
            'discount_type' => $purpose === 'checkout_discount' ? $attributes['discount_type'] : null,
            'percent_off' => $purpose === 'checkout_discount' && $attributes['discount_type'] === 'percentage' ? (int) $attributes['percent_off'] : null,
            'amount_off_minor' => $purpose === 'checkout_discount' && $attributes['discount_type'] === 'fixed' ? (int) $attributes['amount_off_minor'] : null,
            'currency' => 'usd',
            'minimum_order_amount_minor' => $purpose === 'checkout_discount' ? ($attributes['minimum_order_amount_minor'] ?? null) : null,
            'max_redemptions' => 1,
            'expires_at' => $attributes['expires_at'] ?? null,
            'status' => $purpose === 'permanent_access' ? 'active' : 'draft',
            'created_by_admin_id' => $adminId,
        ];

        // Older installations have a wider voucher table. Mirror the fields
        // only when that legacy schema is actually present; a fresh install
        // uses the compact v2 table created by this module.
        $legacy = [
            'code' => $code,
            'name' => 'Individual voucher for '.strtolower(trim((string) $attributes['recipient_email'])),
            'scope' => 'individual',
            'benefit_type' => $purpose === 'permanent_access' ? 'free' : $attributes['discount_type'],
            'discount_value' => $purpose === 'permanent_access' ? 100 : ($attributes['discount_type'] === 'percentage' ? (int) $attributes['percent_off'] : ((int) $attributes['amount_off_minor'] / 100)),
            'package_slugs' => json_encode([$attributes['package_slug']]),
            'max_redemptions_per_user' => 1,
            'starts_at' => now(),
            'created_by' => $adminId,
        ];

        foreach ($legacy as $column => $value) {
            if (Schema::hasColumn('vouchers', $column)) {
                $payload[$column] = $value;
            }
        }

        $voucher = Voucher::create($payload);

        if (Schema::hasTable('voucher_recipients')) {
            DB::table('voucher_recipients')->updateOrInsert(
                ['voucher_id' => $voucher->id, 'email' => $voucher->recipient_email],
                ['status' => 'active', 'max_redemptions' => 1, 'updated_at' => now(), 'created_at' => now()]
            );
        }

        if ($purpose === 'checkout_discount') {
            $this->syncToStripe($voucher);
            $voucher->refresh();
        }

        return compact('voucher', 'code');
    }

    public function validateForPackage(Voucher $voucher, string $package, ?User $user = null): void
    {
        if ($voucher->status !== 'active' && !($voucher->status === 'claimed' && $user && (int) $voucher->claimed_by_wp_user_id === (int) $user->wp_user_id)) {
            throw new RuntimeException('This voucher is not available.');
        }
        if ($voucher->isExpired()) {
            throw new RuntimeException('This voucher has expired.');
        }
        if ($voucher->package_slug !== $package) {
            throw new RuntimeException('This voucher is not valid for the selected package.');
        }
        if ($user && strtolower((string) $user->email) !== strtolower((string) $voucher->recipient_email)) {
            throw new RuntimeException('This voucher is assigned to a different email address.');
        }
    }

    public function claimPermanent(Voucher $voucher, User $user): void
    {
        DB::transaction(function () use ($voucher, $user) {
            $locked = Voucher::lockForUpdate()->findOrFail($voucher->id);
            $this->validateForPackage($locked, $locked->package_slug, $user);
            if ($locked->purpose !== 'permanent_access') {
                throw new RuntimeException('This voucher requires checkout.');
            }

            $locked->update([
                'status' => 'redeemed',
                'claimed_by_wp_user_id' => $user->wp_user_id,
                'claim_reserved_until' => null,
            ]);

            $this->entitlements->grantPermanent((int) $user->wp_user_id, $locked->package_slug, 'voucher', (int) $locked->id);

            VoucherRedemption::firstOrCreate(
                ['voucher_id' => $locked->id, 'wp_user_id' => $user->wp_user_id],
                array_merge([
                    'package_slug' => $locked->package_slug,
                    'currency' => 'usd',
                    'redeemed_at' => now(),
                ], $this->legacyRedemptionFields($locked, (int) $user->wp_user_id, 'redeemed'))
            );
        });
    }

    public function reserveCheckoutVoucher(Voucher $voucher, User $user, string $package): Voucher
    {
        return DB::transaction(function () use ($voucher, $user, $package) {
            $locked = Voucher::lockForUpdate()->findOrFail($voucher->id);
            $this->validateForPackage($locked, $package, $user);
            if ($locked->purpose !== 'checkout_discount' || !$locked->stripe_promotion_code_id) {
                throw new RuntimeException('This voucher is not ready for secure checkout.');
            }

            $locked->update([
                'status' => 'claimed',
                'claimed_by_wp_user_id' => $user->wp_user_id,
                'claim_reserved_until' => Carbon::now()->addMinutes(30),
            ]);

            return $locked->fresh();
        });
    }

    public function recordCheckoutRedemption(array $session): void
    {
        $metadata = $session['metadata'] ?? [];
        $voucherId = (int) ($metadata['voucher_id'] ?? 0);
        $wpUserId = (int) ($metadata['wp_user_id'] ?? 0);
        if ($voucherId <= 0 || $wpUserId <= 0) {
            return;
        }

        DB::transaction(function () use ($voucherId, $wpUserId, $session) {
            $voucher = Voucher::lockForUpdate()->find($voucherId);
            if (!$voucher || $voucher->purpose !== 'checkout_discount') {
                return;
            }
            if ((int) $voucher->claimed_by_wp_user_id !== $wpUserId) {
                return;
            }

            $sessionId = (string) ($session['id'] ?? '');
            VoucherRedemption::firstOrCreate(
                ['checkout_session_id' => $sessionId !== '' ? $sessionId : null],
                array_merge([
                    'voucher_id' => $voucher->id,
                    'wp_user_id' => $wpUserId,
                    'package_slug' => (string) ($metadata['package'] ?? $voucher->package_slug),
                    'stripe_payment_intent_id' => is_string($session['payment_intent'] ?? null) ? $session['payment_intent'] : null,
                    'stripe_subscription_id' => is_string($session['subscription'] ?? null) ? $session['subscription'] : null,
                    'original_amount_minor' => $session['amount_subtotal'] ?? null,
                    'final_amount_minor' => $session['amount_total'] ?? null,
                    'discount_amount_minor' => isset($session['amount_subtotal'], $session['amount_total']) ? max(0, (int) $session['amount_subtotal'] - (int) $session['amount_total']) : null,
                    'currency' => strtolower((string) ($session['currency'] ?? 'usd')),
                    'redeemed_at' => now(),
                ], $this->legacyRedemptionFields($voucher, $wpUserId, 'redeemed', $sessionId))
            );

            $voucher->update(['status' => 'redeemed', 'claim_reserved_until' => null]);
        });
    }

    public function releaseReservation(?int $voucherId, ?int $wpUserId): void
    {
        if (!$voucherId || !$wpUserId) {
            return;
        }
        Voucher::whereKey($voucherId)
            ->where('claimed_by_wp_user_id', $wpUserId)
            ->where('status', 'claimed')
            ->update(['status' => 'active', 'claimed_by_wp_user_id' => null, 'claim_reserved_until' => null]);
    }

    public function retryStripeSync(Voucher $voucher): void
    {
        if ($voucher->purpose !== 'checkout_discount' || !in_array($voucher->status, ['draft', 'sync_failed'], true)) {
            throw new RuntimeException('Only a failed checkout-discount voucher can be activated.');
        }
        $this->syncToStripe($voucher);
    }

    private function legacyRedemptionFields(Voucher $voucher, int $wpUserId, string $status, ?string $reference = null): array
    {
        if (!Schema::hasColumn('voucher_redemptions', 'voucher_recipient_id')) {
            return [];
        }

        $recipient = DB::table('voucher_recipients')
            ->where('voucher_id', $voucher->id)
            ->where('email', $voucher->recipient_email)
            ->first();
        if (!$recipient) {
            $recipientId = DB::table('voucher_recipients')->insertGetId([
                'voucher_id' => $voucher->id,
                'email' => $voucher->recipient_email,
                'wp_user_id' => $wpUserId,
                'status' => 'active',
                'max_redemptions' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $recipientId = (int) $recipient->id;
            DB::table('voucher_recipients')->where('id', $recipientId)->update(['wp_user_id' => $wpUserId, 'updated_at' => now()]);
        }

        return [
            'voucher_recipient_id' => $recipientId,
            'email' => $voucher->recipient_email,
            'package' => $voucher->package_slug,
            'status' => $status,
            'discount_amount' => $voucher->discount_type === 'fixed' ? ($voucher->amount_off_minor / 100) : 0,
            'external_reference' => $reference,
        ];
    }

    private function syncToStripe(Voucher $voucher): void
    {
        $secret = (string) config('cashier.secret');
        if ($secret === '') {
            $voucher->update(['status' => 'sync_failed', 'last_sync_error' => 'Stripe is not configured.']);
            throw new RuntimeException('Stripe is not configured; the voucher was saved as sync failed.');
        }

        try {
            $stripe = new \Stripe\StripeClient($secret);
            $couponData = ['duration' => 'once', 'metadata' => ['voucher_id' => (string) $voucher->id]];
            if ($voucher->discount_type === 'percentage') {
                $couponData['percent_off'] = $voucher->percent_off;
            } else {
                $couponData['amount_off'] = $voucher->amount_off_minor;
                $couponData['currency'] = 'usd';
            }
            if ($voucher->stripe_coupon_id) {
                $coupon = $stripe->coupons->retrieve($voucher->stripe_coupon_id);
            } else {
                $coupon = $stripe->coupons->create($couponData);
                // Persist the remote object before the second Stripe call. A
                // retry can then safely reuse it if promotion-code creation
                // was interrupted.
                $voucher->update(['stripe_coupon_id' => $coupon->id]);
            }

            $promotionData = ['coupon' => $coupon->id, 'code' => Crypt::decryptString($voucher->code_encrypted), 'max_redemptions' => 1];
            if ($voucher->expires_at) {
                $promotionData['expires_at'] = $voucher->expires_at->timestamp;
            }
            if ($voucher->minimum_order_amount_minor) {
                $promotionData['restrictions'] = [
                    'minimum_amount' => $voucher->minimum_order_amount_minor,
                    'minimum_amount_currency' => 'usd',
                ];
            }
            $promotion = $stripe->promotionCodes->create($promotionData);

            $voucher->update([
                'stripe_promotion_code_id' => $promotion->id,
                'status' => 'active',
                'last_sync_error' => null,
            ]);
        } catch (\Throwable $e) {
            report($e);
            $voucher->update(['status' => 'sync_failed', 'last_sync_error' => Str::limit($e->getMessage(), 1000)]);
            throw new RuntimeException('Stripe could not activate this voucher.');
        }
    }
}
