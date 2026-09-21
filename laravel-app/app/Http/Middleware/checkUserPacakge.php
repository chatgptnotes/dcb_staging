<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\WPUsers;
use App\Services\Billing\PackageCatalog;

class checkUserPacakge
{
    public function __construct(private PackageCatalog $catalog)
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = (int) session('user_id');
        $package = $userId > 0
            ? WPUsers::where('user_id', $userId)->value('package')
            : null;

        if ($this->catalog->isPaid($package)) {
            return $next($request);
        }

        return back()->with('package-fail', 'Please upgrade your package to access this feature.');
    }
}
