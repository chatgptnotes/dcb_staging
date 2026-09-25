<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventAuthFormCaching
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-store, private, max-age=0');
        $response->headers->set('Pragma', 'no-cache');

        return $response;
    }
}
