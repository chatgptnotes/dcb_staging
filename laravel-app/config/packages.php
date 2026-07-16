<?php

/*
|--------------------------------------------------------------------------
| Package / entitlement catalog (Phase 2 — payments)
|--------------------------------------------------------------------------
|
| Single source of truth mapping the entitlement SLUGS the app already uses
| (the WooCommerce product post_name slugs that ValidatePackage compares)
| to their Stripe price + billing type. The webhook and checkout read this.
|
| 'type'           => 'subscription' (auto-renew) | 'one_time' (pay once)
| 'stripe_price_id'=> the Stripe Price to bill (test or live, per env)
|
| 'free' is the implicit default and has no Stripe price.
|
*/

return [

    // Active checkout/billing driver: 'wp' (WooCommerce sso_link, current)
    // or 'cashier' (native Stripe Checkout). Default 'wp' = nothing changes.
    'driver' => env('PAYMENTS_DRIVER', 'wp'),

    // Funnel: 'free_first' (assessment free, pay to unlock premium — current
    // behavior) or 'pay_first' (must pay before the assessment). Default
    // free_first so nothing changes until flipped.
    'funnel' => env('FUNNEL_MODE', 'free_first'),

    // The slug assigned when a user has no paid entitlement.
    'free_slug' => 'free',

    // Shared secret for the server-to-server /api/update-package-status endpoint
    // (the WordPress membership sync). When set, the endpoint requires it.
    'sync_secret' => env('DMB_PACKAGE_SYNC_SECRET'),

    // Paid packages keyed by entitlement slug.
    'plans' => [

        'decodemybrain-deep-dive' => [
            'name' => 'Deep Dive',
            'price_label' => '$199',
            'type' => 'subscription',
            'stripe_price_id' => env('STRIPE_PRICE_DEEP_DIVE'),
            'wc_product_id' => 20724, // legacy WooCommerce product (wp driver)
        ],

        'decodemybrain-guided-friend-and-family-connect' => [
            'name' => 'Guided Friend & Family Connect',
            'price_label' => '$499',
            'type' => 'subscription',
            'stripe_price_id' => env('STRIPE_PRICE_GUIDED_FF'),
            'wc_product_id' => 21020,
        ],

    ],

];
