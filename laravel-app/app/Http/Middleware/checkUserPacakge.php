<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkUserPacakge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/wp-json/yith-subscription/v1/list/' . session('user_id');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
         
        if (curl_errno($ch)) {
            curl_close($ch);
            return back()->with('package-fail', 'Failed to fetch subscription data. Please try again later.');
        }
        
        curl_close($ch);
        
        $data = json_decode($response, true);
        
        if (isset($data['code']) && $data['code'] === 'No active subscriptions') {
            return back()->with('package-fail', 'Please Upgrade Your Package.');
        }
        
        if (is_array($data) && !empty($data)) {
            return $next($request);
        } else {
            return back()->with('package-fail', 'Unexpected response format. Please try again later.');
        }

    }
}
