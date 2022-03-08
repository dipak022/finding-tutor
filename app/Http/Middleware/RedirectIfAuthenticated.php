<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->roll->id==1) {
                return redirect()->route('admin.deshboard');
            }else if (Auth::guard($guard)->check() && Auth::user()->roll->id==2) {
                return redirect()->route('user.deshboard');
            }else if (Auth::guard($guard)->check() && Auth::user()->roll->id==3) {
                return redirect()->route('specialist.deshboard');
            }
            else{
                return $next($request);
            }
        }

        
    }
}
