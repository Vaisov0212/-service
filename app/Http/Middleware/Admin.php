<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(!Auth::check())
        {
        return redirect()->route('login');

        }

        if(Auth::user()->role=="admin")
        {
        return $next($request);

        }

        if(Auth::user()->role=="user")
        {
        return redirect()->route('index');

        }

    }
}
