<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\PaymentRecord;
use App\Models\User;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * Persists the customer and package context that Stripe Checkout associates
 * with a successful purchase. Stripe's PaymentIntent does not reliably carry
 * Checkout Session metadata, so the admin payment view reads this local copy.
 */
final class CheckoutPaymentRecorder
{
    public function recordSuccessfulCheckout(array $session): void
    {
        if (! Schema::hasTable('payment_records')) {
            return;
        }

        $sessionId = (string) ($session['id'] ?? '');
        if ($sessionId === '') {
            return;
        }

        $metadata = (array) ($session['metadata'] ?? []);
        $wpUserId = (int) ($metadata['wp_user_id'] ?? 0);
        $customerDetails = (array) ($session['customer_details'] ?? []);
        $user = $wpUserId > 0 ? User::where('wp_user_id', $wpUserId)->first() : null;

        if ($user === null && ! empty($customerDetails['email'])) {
            $user = User::where('email', strtolower((string) $customerDetails['email']))->first();
            $wpUserId = (int) ($user?->wp_user_id ?? 0);
        }

        $voucherId = (int) ($metadata['voucher_id'] ?? 0);
        $voucherCode = $voucherId > 0 ? Voucher::whereKey($voucherId)->value('code_hint') : null;
        $created = isset($session['created']) && is_numeric($session['created'])
            ? Carbon::createFromTimestamp((int) $session['created'])
            : now();

        $record = PaymentRecord::firstOrNew(['checkout_session_id' => $sessionId]);
        $record->fill([
            'wp_user_id' => $wpUserId ?: null,
            'stripe_payment_intent_id' => $this->stripeId($session['payment_intent'] ?? null),
            'stripe_subscription_id' => $this->stripeId($session['subscription'] ?? null),
            'stripe_customer_id' => $this->stripeId($session['customer'] ?? null),
            'customer_name' => $this->firstPresent($user?->display_name, $customerDetails['name'] ?? null),
            'customer_email' => $this->firstPresent($user?->email, $customerDetails['email'] ?? null),
            'package_slug' => $metadata['package'] ?? null,
            'coupon_code' => $voucherCode,
            'amount_subtotal_minor' => isset($session['amount_subtotal']) ? (int) $session['amount_subtotal'] : null,
            'amount_total_minor' => isset($session['amount_total']) ? (int) $session['amount_total'] : null,
            'currency' => strtolower((string) ($session['currency'] ?? 'usd')),
            'status' => 'paid',
            'paid_at' => $created,
        ]);
        // Invoice only explicitly settled payments, never merely complete sessions.
        $email = $this->firstPresent($user?->email, $customerDetails['email'] ?? null);
        if ($email && str_ends_with($email, '@pending.decodemybrain.local')) {
            $email = $customerDetails['email'] ?? null;
        }
        if ($record->invoice_data === null
            && in_array($session['payment_status'] ?? null, ['paid', 'no_payment_required'], true)
            && isset($session['amount_total'])
            && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $record->invoice_data = [
                'email' => $email,
                'name' => $record->customer_name,
                'package' => app(PackageCatalog::class)->plan((string) $record->package_slug)['name'] ?? $record->package_slug ?? 'Assessment',
                'discount' => (int) ($session['total_details']['amount_discount'] ?? 0),
                'tax' => (int) ($session['total_details']['amount_tax'] ?? 0),
            ];
        }
        $record->save();

        try {
            app(PaymentInvoiceSender::class)->send($record);
        } catch (\Throwable $e) {
            // The scheduled retry handles delivery without blocking paid access.
            report($e);
        }
    }

    private function stripeId(mixed $value): ?string
    {
        if (is_string($value) && $value !== '') {
            return $value;
        }

        if (is_array($value) && ! empty($value['id'])) {
            return (string) $value['id'];
        }

        if (is_object($value) && ! empty($value->id)) {
            return (string) $value->id;
        }

        return null;
    }

    private function firstPresent(?string ...$values): ?string
    {
        foreach ($values as $value) {
            if ($value !== null && trim($value) !== '') {
                return trim($value);
            }
        }

        return null;
    }
}
