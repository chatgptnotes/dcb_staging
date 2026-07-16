<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\PricingPackage;
use RuntimeException;
use Throwable;

final class StripePriceManager
{
    public function __construct(private StripePriceGateway $gateway)
    {
    }

    public function ensurePrice(
        PricingPackage $package,
        string $title,
        float $amount,
        string $currency,
        string $type,
        ?string $interval
    ): StripePriceResult {
        if (empty(config('cashier.secret'))) {
            throw new RuntimeException('Stripe is not configured (cashier.secret missing), so the real charge cannot be set. Add Stripe keys first.');
        }

        $amount = round($amount, 2);
        $currency = strtolower(trim($currency));
        $interval = $type === 'subscription' ? $interval : null;

        $billingChanged = (float) $package->amount !== $amount
            || strtolower((string) $package->currency) !== $currency
            || (string) $package->type !== $type
            || (string) $package->billing_interval !== (string) $interval;

        $hasValidExistingPrice = false;
        $replacedInvalid = false;

        if (!empty($package->stripe_price_id) && !$billingChanged) {
            try {
                $this->gateway->retrievePrice((string) $package->stripe_price_id);
                $hasValidExistingPrice = true;
            } catch (Throwable) {
                $replacedInvalid = true;
            }
        }

        if ($hasValidExistingPrice) {
            return new StripePriceResult(
                (string) $package->stripe_price_id,
                $package->stripe_product_id,
                false,
                false
            );
        }

        $productId = $this->usableProductId($package);
        if ($productId === null) {
            $product = $this->gateway->createProduct([
                'name' => $title,
                'metadata' => ['package_slug' => $package->slug],
            ]);
            $productId = (string) $product->id;
        } else {
            $this->gateway->updateProduct($productId, [
                'name' => $title,
                'metadata' => ['package_slug' => $package->slug],
            ]);
        }

        $priceParams = [
            'unit_amount' => (int) round($amount * 100),
            'currency' => $currency,
            'product' => $productId,
            'metadata' => ['package_slug' => $package->slug],
        ];

        if ($type === 'subscription') {
            $priceParams['recurring'] = ['interval' => $interval];
        }

        $price = $this->gateway->createPrice($priceParams);

        return new StripePriceResult((string) $price->id, $productId, true, $replacedInvalid);
    }

    private function usableProductId(PricingPackage $package): ?string
    {
        if (empty($package->stripe_product_id)) {
            return null;
        }

        try {
            $this->gateway->retrieveProduct((string) $package->stripe_product_id);
            return (string) $package->stripe_product_id;
        } catch (Throwable) {
            return null;
        }
    }
}
