<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && !$request->is('logout')) {
            return redirect('/dashboard');
        }

        return $next($request);
    }

}
