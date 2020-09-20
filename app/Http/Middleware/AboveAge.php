<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AboveAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $age)
    {
        $loggedInUserAge = 12;

        if ($loggedInUserAge > $age) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
