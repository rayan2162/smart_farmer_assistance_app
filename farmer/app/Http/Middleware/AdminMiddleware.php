<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::check()) {
            if (Auth::user()->isAdmin) {
                return $next($request);
            } else {
                return redirect('/home'); // Redirect to home if authenticated but not an admin
            }
        }

        return redirect()->route('login'); // Redirect to login if not authenticated
    }
}
