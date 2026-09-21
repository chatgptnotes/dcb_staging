<?php

namespace App\Http\Middleware;

use App\Models\WPUsers;
use App\Services\Billing\PackageCatalog;
use Closure;
use Illuminate\Http\Request;

class ValidatePackage
{
    public function __construct(private PackageCatalog $catalog)
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  mixed  ...$allowedPackages
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$allowedPackages)
    {
        $userId = session('user_id');

        if (!$userId) {
            return redirect('/sign-in')->with('fail', 'Please login to continue.');
        }

        $wpUser = WPUsers::where('user_id', $userId)->first();

        if (!$wpUser) {
            return redirect('/billing')->with('fail', 'Please choose a package to continue.');
        }

        if (!$wpUser->package) {
            return redirect('/billing')->with('fail', 'Please upgrade your package.');
        }

        // Existing routes still pass the two former plan slugs as middleware
        // parameters. Paid access is now catalog-driven so a current plan
        // such as small-group cannot be accepted by checkout/dashboard and
        // then rejected at its report route.
        if ($this->catalog->isPaid($wpUser->package)) {
            return $next($request);
        }

        return redirect('/billing')->with('fail', 'Please upgrade your package.');
    }
}
