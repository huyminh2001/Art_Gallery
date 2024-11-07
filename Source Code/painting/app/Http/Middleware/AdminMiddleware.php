<?php

namespace App\Http\Middleware;

use App\Models\Account;
use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware 
{
    public function handle(Request $request, Closure $next) : Response
    {
        $username = session() -> get('user');

        if (!$username) {
            // Handle scenario where username is not in session
            return redirect('admin/register_login/login');
        }
    
        $user = Account::where('username', $username)->first();
        if ((!$user) || ($user && $user->role_id !== 1) ) {
            $request->session()->put('loginRequired', true);
            return redirect('admin/register_login/login')->withErrors(['message' => 'Access Restricted! You are not authorized to access this page.']);;
        }
        return $next($request);
    }


    // public function handle(Request $request, Closure $next) : Response
    // {
    //     $user = session() ->get('username');
    //     if ((!$request->session()->has('username')) && (auth()->user()-> role_id == 2) ) {
    //         $request->session()->put('loginRequired', true);
    //         $request->session()->put('loginRequiredExpiry', time() + 60);
    //         return redirect('admin/register_login/login');
    //     }
    //     return $next($request);
    // }
}