<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PricingPackage;
use App\Services\Billing\PackageCatalog;
use Illuminate\Http\RedirectResponse;

class PublicPurchaseController extends Controller
{
    public function plans()
    {
        return view('public.plans', [
            'packages' => PricingPackage::where('is_visible', true)->orderBy('sort_order')->get(),
        ]);
    }

    /** A signed-in customer has already made the code/payment choice. */
    public function continuePlan(string $package, PackageCatalog $catalog): RedirectResponse
    {
        $pricingPackage = PricingPackage::where('slug', $package)->first();
        if (! $catalog->exists($package) || $package === $catalog->freeSlug() || ($pricingPackage?->cta_mode ?? 'purchase') === 'enquiry') {
            return redirect()->route('public.plans')->with('fail', 'Choose a valid assessment before continuing.');
        }

        session(['intended_package' => $package]);

        return redirect()->route('checkout.start', $package);
    }
}
