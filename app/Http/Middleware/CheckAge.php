<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {
        if($age < '18') {
            return redirect('/');
        }

        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo '<br> This is terminate function.';
    }
}
