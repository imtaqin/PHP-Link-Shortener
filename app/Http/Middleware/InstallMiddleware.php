<?php

namespace App\Http\Middleware;

use Closure;

class InstallMiddleware
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
        // If the app is not installed
        if (!config()->has('settings.title')) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
