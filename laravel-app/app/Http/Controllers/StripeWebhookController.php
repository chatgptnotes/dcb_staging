<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Billing\EntitlementService;
use App\Services\Billing\CheckoutPaymentRecorder;
use App\Services\Billing\PackageCatalog;
use App\Services\Billing\VoucherService;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Stripe webhook receiver. Extends Cashier's controller so Cashier's own
 * subscription tables stay in sync (via parent::), and additionally writes
 * the app's entitlement (wp_users.package — the source the access gate reads)
 * through EntitlementService.
 *
 * The route is signature-verified by Cashier's VerifyWebhookSignature
 * middleware whenever STRIPE_WEBHOOK_SECRET is configured.
 */
class StripeWebhookController extends CashierWebhookController
{
    private EntitlementService $entitlements;

    private PackageCatalog $catalog;

    private VoucherService $vouchers;

    private CheckoutPaymentRecorder $payments;

    public function __construct(EntitlementService $entitlements, PackageCatalog $catalog, VoucherService $vouchers, CheckoutPaymentRecorder $payments)
    {
        parent::__construct();
        $this->entitlements = $entitlements;
        $this->catalog = $catalog;
        $this->vouchers = $vouchers;
        $this->payments = $payments;
    }

    /**
     * One-time purchases complete here.
     */
    public function handleCheckoutSessionCompleted(array $payload): Response
    {
        // Grant only when funds are actually captured. A session can be
        // 'complete' while still 'unpaid' (async methods); those settle later via
        // checkout.session.async_payment_succeeded.
        $object = $payload['data']['object'] ?? [];
        $paymentStatus = $object['payment_status'] ?? null;
        if ($paymentStatus === 'paid' || $paymentStatus === 'no_payment_required') {
            $this->grantFrom($object);
            $this->payments->recordSuccessfulCheckout($object);
            $this->vouchers->recordCheckoutRedemption($object);
        }

        return $this->successMethod();
    }

    /**
     * Async payment (e.g. bank debit) settled after the session completed.
     */
    public function handleCheckoutSessionAsyncPaymentSucceeded(array $payload): Response
    {
        $session = $payload['data']['object'] ?? [];
        $this->grantFrom($session);
        $this->payments->recordSuccessfulCheckout($session);

        return $this->successMethod();
    }

    /**
     * Subscription state changes (renewal, cancel-at-period-end, etc.).
     */
    public function handleCustomerSubscriptionUpdated(array $payload): Response
    {
        $response = parent::handleCustomerSubscriptionUpdated($payload);

        $object = $payload['data']['object'] ?? [];
        $status = $object['status'] ?? null;

        // Keep access while active/trialing AND during recoverable dunning
        // (past_due / incomplete) so a single failed renewal retry doesn't strip
        // a paying customer mid-cycle. Revoke only on terminal states.
        if (in_array($status, ['active', 'trialing', 'past_due', 'incomplete'], true)) {
            if (in_array($status, ['active', 'trialing'], true)) {
                $this->grantFrom($object);
            }
            // past_due/incomplete: leave the current entitlement untouched.
        } elseif (in_array($status, ['canceled', 'unpaid', 'incomplete_expired'], true)) {
            $this->revokeFrom($object);
        }

        return $response;
    }

    /**
     * Subscription fully ended.
     */
    public function handleCustomerSubscriptionDeleted(array $payload): Response
    {
        $response = parent::handleCustomerSubscriptionDeleted($payload);
        $this->revokeFrom($payload['data']['object'] ?? []);

        return $response;
    }

    private function grantFrom(array $object): void
    {
        $wpUserId = $this->resolveWpUserId($object);
        $slug = $this->resolveSlug($object);

        if ($wpUserId !== null && $slug !== null) {
            $this->entitlements->setPackage($wpUserId, $slug);
        }
    }

    private function revokeFrom(array $object): void
    {
        $wpUserId = $this->resolveWpUserId($object);
        if ($wpUserId !== null) {
            $this->entitlements->downgradeToFree($wpUserId);
        }
    }

    /**
     * Prefer the wp_user_id we attached as metadata at checkout; fall back to
     * the Stripe customer → local user mapping.
     */
    private function resolveWpUserId(array $object): ?int
    {
        $meta = $object['metadata'] ?? [];
        if (! empty($meta['wp_user_id']) && is_numeric($meta['wp_user_id'])) {
            return (int) $meta['wp_user_id'];
        }

        $customerId = $object['customer'] ?? null;
        if (is_string($customerId) && $customerId !== '') {
            $user = User::where('stripe_id', $customerId)->first();
            if ($user !== null && $user->wp_user_id !== null) {
                return (int) $user->wp_user_id;
            }
        }

        return null;
    }

    /**
     * Resolve the entitlement slug from metadata first, else from the Stripe
     * price on the subscription line item.
     */
    private function resolveSlug(array $object): ?string
    {
        $meta = $object['metadata'] ?? [];
        if (! empty($meta['package']) && $this->catalog->exists((string) $meta['package'])) {
            return (string) $meta['package'];
        }

        $priceId = $object['items']['data'][0]['price']['id']
            ?? $object['plan']['id']
            ?? null;

        return $this->catalog->slugForPriceId(is_string($priceId) ? $priceId : null);
    }
}
