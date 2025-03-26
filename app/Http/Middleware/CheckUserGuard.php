<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


    public function handle($request, Closure $next, $guard = null)
{
    // if (auth()->guard($guard)->guest()) {
    //     return redirect()->route('login.store');
    // }


    if ($guard === 'admin') {
        return redirect()->route('dashboard.home');
    }

    if ($guard === 'web') {

        if ($request->route()->named('dashboard.home')) {
            return redirect()->route('not_allowed');
        }
        return redirect()->route('site.index');
    }

    return $next($request);
}

}
