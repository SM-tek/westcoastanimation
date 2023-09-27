<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetXFrameOptions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->header('X-Frame-Options', 'SAMEORIGIN'); // Or use 'SAMEORIGIN' if needed
         $response->header('X-Content-Type-Options', 'nosniff');
         $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
         $response->header('X-Frame-Options', 'SAMEORIGIN');

        return $response;
    }
}
