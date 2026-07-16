<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Billing\StripeApiPriceGateway;
use App\Services\Billing\StripePriceGateway;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->bypassDeadLocalStripeProxy();

        // We register our own signature-verified webhook route
        // (StripeWebhookController) instead of Cashier's default.
        Cashier::ignoreRoutes();

        $this->app->bind(StripePriceGateway::class, StripeApiPriceGateway::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * The local PHP environment can inherit a proxy from the developer shell.
     * A proxy pointed at 127.0.0.1:9 is a deliberately closed port and makes
     * every Stripe request fail before it ever reaches Stripe.  Do not let that
     * machine-specific setting take the checkout offline.
     */
    private function bypassDeadLocalStripeProxy(): void
    {
        if (! $this->app->environment('local')) {
            return;
        }

        $proxyVariables = [
            'HTTP_PROXY', 'HTTPS_PROXY', 'ALL_PROXY',
            'http_proxy', 'https_proxy', 'all_proxy',
        ];

        $hasDeadLocalProxy = false;

        foreach ($proxyVariables as $variable) {
            $value = getenv($variable);

            if (! is_string($value) || ! preg_match('#^https?://(?:127\.0\.0\.1|localhost):9/?$#i', $value)) {
                continue;
            }

            $hasDeadLocalProxy = true;
            putenv($variable);
            unset($_ENV[$variable], $_SERVER[$variable]);
        }

        if (! $hasDeadLocalProxy || ! defined('CURLOPT_PROXY')) {
            return;
        }

        $client = new \Stripe\HttpClient\CurlClient([
            CURLOPT_PROXY => '',
            CURLOPT_NOPROXY => '*',
        ]);

        \Stripe\ApiRequestor::setHttpClient($client);
        \Stripe\ApiRequestor::setStreamingHttpClient($client);
    }
}
