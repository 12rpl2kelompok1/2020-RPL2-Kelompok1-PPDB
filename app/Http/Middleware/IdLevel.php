<?php

namespace App\Http\Middleware;

use Closure;

class IdLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->id_level == 1){
            return $next($request);
        }
        return redirect('home')->with('error', "You don't have admin access.");
    }
}
