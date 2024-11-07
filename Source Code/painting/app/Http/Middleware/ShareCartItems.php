<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Closure;
use Illuminate\Http\Request;

class ShareCartItems
{
    // public function handle($request, Closure $next)
    // {
    //     $userId = Session::get('userid');

    //     if ($userId) {
    //         $cartItems = DB::table('painting')->where('account_cart.account_id',$userId)->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->select('account_cart.*', 'painting.name as paintingName', 'painting.price as paintingPrice')->get(); // Assuming a Cart model with a relationship to Painting
    //         $request->attributes->add(['layout_carts' => $cartItems]);
    //     } else {
    //         $request->attributes->add(['layout_carts' => []]); // Provide an empty array for non-logged-in users
    //     }

    //     return $next($request);
    // }
}