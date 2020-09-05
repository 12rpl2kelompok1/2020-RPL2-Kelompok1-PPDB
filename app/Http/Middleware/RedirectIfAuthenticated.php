<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == 'admin') {
     if (Auth::guard($guard)->check()) {
            return redirect('/dashboard_admin');
     }
        }else {
     if (Auth::guard($guard)->check()) {
            return redirect('frontend.master');
     }
     }
         

        return $next($request);
        if (Auth::guard($guard)->check()) {
             return redirect(RouteServiceProvider::HOME);
         }
    }
}
