<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PricingPackage;
use App\Models\User;
use App\Services\Billing\PackageCatalog;
use App\Services\Billing\PlanAgeEligibilityService;
use Illuminate\Http\RedirectResponse;
use RuntimeException;

class PublicPurchaseController extends Controller
{
    public function plans()
    {
        return view('public.plans', [
            'packages' => PricingPackage::where('is_visible', true)->orderBy('sort_order')->get(),
        ]);
    }

    /** A signed-in customer has already made the code/payment choice. */
    public function continuePlan(string $package, PackageCatalog $catalog, PlanAgeEligibilityService $ageEligibility): RedirectResponse
    {
        $pricingPackage = PricingPackage::where('slug', $package)->first();
        if (! $catalog->exists($package) || $package === $catalog->freeSlug() || ($pricingPackage?->cta_mode ?? 'purchase') === 'enquiry') {
            return redirect()->route('public.plans')->with('fail', 'Choose a valid assessment before continuing.');
        }

        $dateOfBirth = User::where('wp_user_id', session('user_id'))->value('date_of_birth');
        try {
            $ageEligibility->assertEligible($pricingPackage, $dateOfBirth);
        } catch (RuntimeException $e) {
            return redirect()->route('public.plans')->with('fail', $e->getMessage());
        }

        session(['intended_package' => $package]);

        return redirect()->route('checkout.start', $package);
    }
}
