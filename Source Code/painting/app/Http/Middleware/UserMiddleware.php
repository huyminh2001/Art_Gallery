<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('username')) {
            return redirect('/login');
        }
        return $next($request);
    }
}