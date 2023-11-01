<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class clientLogin
{

    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('clients')->check())
            return $next($request);
        else
            return redirect()->route('login');
    }
}
