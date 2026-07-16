<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\WPUsers;
use App\Services\Billing\PackageCatalog;
use Closure;
use Illuminate\Http\Request;

/**
 * Pay-first funnel gate: when FUNNEL_MODE=pay_first, a user must hold a paid
 * package before reaching the gated route (the assessment). Otherwise they are
 * sent to sign in (if not logged in) or back to the landing page (if free).
 *
 * Does nothing under the default free_first funnel, so it is safe to apply to
 * routes without changing current behavior until the flag is flipped.
 */
class RequirePaidPackage
{
    public function __construct(private PackageCatalog $catalog)
    {
    }

    public function handle(Request $request, Closure $next)
    {
        // Only enforce in pay-first mode.
        if (config('packages.funnel') !== 'pay_first') {
            return $next($request);
        }

        $userId = session('user_id');
        if (!$userId) {
            return redirect('sign-in')->with('fail', 'Please sign in to continue.');
        }

        $package = WPUsers::where('user_id', $userId)->value('package');
        $normalized = strtolower(trim((string) $package, " \t\n\r\0\x0B\"'"));

        // Paid = any catalogued plan that isn't the free slug.
        $paidSlugs = array_keys($this->catalog->plans());
        if (in_array($normalized, $paidSlugs, true)) {
            return $next($request);
        }

        return redirect('/')->with('fail', 'Please choose Book Today to select a plan and continue to payment.');
    }
}
