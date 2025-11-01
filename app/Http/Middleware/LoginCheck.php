<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if session has 'member' key (set during login)
        if (!$request->session()->has('member')) {
            return redirect('/login')->with('error', 'You must log in first');
        }

        return $next($request);
    }
}
