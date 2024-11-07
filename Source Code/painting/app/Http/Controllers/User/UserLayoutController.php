<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLayoutController extends Controller {
    public function preview_cart() {
        $data = [
            'cart' => DB::table('painting')->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->select('account_cart.*', 'painting.*')
        ];

        return view('user/home/home')->with($data);
    }
}
