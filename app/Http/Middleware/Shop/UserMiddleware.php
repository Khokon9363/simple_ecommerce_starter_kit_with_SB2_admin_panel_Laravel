<?php

namespace App\Http\Middleware\Shop;

use Closure;

class UserMiddleware
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
        if (auth()->user()->role === 'User') {
            return $next($request);
        }
        return redirect()->route('admin.dashboard');
    }
}
