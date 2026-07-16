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

    /** Store a selected paid plan for a signed-in customer before access/payment choice. */
    public function continuePlan(string $package, PackageCatalog $catalog): RedirectResponse
    {
        if (! $catalog->exists($package) || $package === $catalog->freeSlug()) {
            return redirect()->route('public.plans')->with('fail', 'Choose a valid assessment before continuing.');
        }

        session([
            'intended_package' => $package,
            'new_purchase_flow' => true,
        ]);

        return redirect()->route('access.choice');
    }
}
