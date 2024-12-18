<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfPublisher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'publisher')
    {
        
        if (Auth::guard($guard)->check()) {
            return to_route('publisher.dashboard');
        }
        return $next($request);
    }
}
