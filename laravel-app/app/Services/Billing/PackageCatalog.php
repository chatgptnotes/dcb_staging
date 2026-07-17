<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\PricingPackage;
use Throwable;

/**
 * Read-only accessor over the package catalog. Resolves between entitlement
 * slugs and Stripe price IDs in both directions.
 *
 * Source of truth is the admin-managed `pricing_packages` table; config
 * (config/packages.php) is the seed/fallback used when the table is absent or
 * empty (e.g. fresh env before the SQL is imported). Slugs are fixed in both.
 */
final class PackageCatalog
{
    /** @var array<string, array<string, mixed>>|null */
    private ?array $cache = null;

    /** @return array<string, array<string, mixed>> */
    public function plans(): array
    {
        if ($this->cache !== null) {
            return $this->cache;
        }

        $config = config('packages.plans', []);

        try {
            $rows = PricingPackage::orderBy('sort_order')->get();
        } catch (Throwable $e) {
            // Table missing (other env) or DB issue — fall back to config.
            return $this->cache = $config;
        }

        if ($rows->isEmpty()) {
            return $this->cache = $config;
        }

        $plans = [];
        foreach ($rows as $row) {
            // Enquiry-only cards are display/catalogue entries, not individual
            // checkout products and must never be accepted by the purchase flow.
            if (($row->cta_mode ?? 'purchase') === 'enquiry') {
                continue;
            }
            // Merge onto any config defaults for this slug so legacy keys
            // (e.g. wc_product_id for the wp driver) survive.
            $base = $config[$row->slug] ?? [];
            $plans[$row->slug] = array_merge($base, [
                'name' => $row->title,
                'price_label' => $row->price_label,
                'type' => $row->type,
                'stripe_price_id' => $row->stripe_price_id ?: null,
            ]);
        }

        return $this->cache = $plans;
    }

    public function freeSlug(): string
    {
        return (string) config('packages.free_slug', 'free');
    }

    public function driver(): string
    {
        return (string) config('packages.driver', 'wp');
    }

    public function isCashier(): bool
    {
        return $this->driver() === 'cashier';
    }

    /** @return array<string, mixed>|null */
    public function plan(string $slug): ?array
    {
        return $this->plans()[$slug] ?? null;
    }

    public function exists(string $slug): bool
    {
        return $slug === $this->freeSlug() || isset($this->plans()[$slug]);
    }

    public function isSubscription(string $slug): bool
    {
        return ($this->plan($slug)['type'] ?? null) === 'subscription';
    }

    public function stripePriceId(string $slug): ?string
    {
        $id = $this->plan($slug)['stripe_price_id'] ?? null;

        return is_string($id) && $id !== '' ? $id : null;
    }

    /**
     * Reverse lookup: which entitlement slug does this Stripe price grant?
     */
    public function slugForPriceId(?string $priceId): ?string
    {
        if ($priceId === null || $priceId === '') {
            return null;
        }

        foreach ($this->plans() as $slug => $plan) {
            if (($plan['stripe_price_id'] ?? null) === $priceId) {
                return $slug;
            }
        }

        return null;
    }
}
