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
        \Illuminate\Support\Facades\View::composer('public.partials.site-nav', function (\Illuminate\View\View $view) {
            if (session('user_id')) {
                $view->with('assessmentAction', app(\App\Services\AssessmentResumeService::class)
                    ->navigationAction((int) session('user_id')));
            }
        });

        \Illuminate\Support\Facades\View::composer('public.program', function (\Illuminate\View\View $view) {
            $packages = \App\Models\PricingPackage::where('is_visible', true)->orderBy('sort_order')->get();
            $program = $view->getData()['program'];
            $package = $packages->first(fn ($package) => $package->publicProgramKey() === $program);
            abort_unless($package, 404);

            $view->with([
                'packages' => $packages,
                'programTitle' => $package->title,
                'programAgeLabel' => $package->ageRangeLabel(),
                'programPackage' => $package,
            ]);
        });

        \Illuminate\Support\Facades\View::composer([
            'public.partials.site-nav',
            'public.partials.reference-content',
        ], function (\Illuminate\View\View $view) {
            // The landing controller already loads the visible catalog. Other
            // public pages need the same admin-managed labels in their header.
            $packages = $view->getData()['packages']
                ?? \App\Models\PricingPackage::where('is_visible', true)->orderBy('sort_order')->get();
            $view->with('publicPrograms', $packages->filter(
                fn ($package) => $package->is_visible && $package->publicProgramKey() !== null
            ));
        });
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
