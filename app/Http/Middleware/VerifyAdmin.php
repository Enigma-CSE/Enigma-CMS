<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!Auth::check()) {
        //     return redirect()->route('login');
        // }else if (Auth::check() && Auth::user()->is_admin && Auth::user()->is_verified && !Auth::user()->is_alumini) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('home');
        // }

        //for testing purposes

        return $next($request);

    }
}
