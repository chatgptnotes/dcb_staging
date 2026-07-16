<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->user_role == 1 && Auth::user()->status == "active"){
                return $next($request);
            } else{
                $request->session()->flush();
                return redirect('/admin');
            }
        } else{
            $request->session()->flush();
            return redirect('/admin');
        }
    }
}
