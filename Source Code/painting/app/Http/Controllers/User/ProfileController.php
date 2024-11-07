<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function profile(Request $request) {
        $userid = $request->session()->get('userid');

        $purchasedItems = DB::table('order')->where('account_id', $userid)->join('orderdetail', 'orderdetail.order_id', '=', 'order.id')->join('painting', 'painting.id', '=', 'orderdetail.painting_id')->join('payment_method', 'payment_method.id', '=', 'order.payment_method_id')->join('photos', 'photos.painting_id', '=', 'painting.id')->select('order.*','painting.name as paintingName', 'payment_method.name as paymentName', 'orderdetail.price as paintingPrice', 'orderdetail.quantity as paintingQuantity', 'photos.name as photoName')->get();
        
        $data = [
            'title' => "Profile",
            'active_menu' => 'profile',
            'purchasedItems' => $purchasedItems
        ];

        return view('user/profile/profile')->with($data);
    }

    public function logout_proceed(Request $request) {
        $request->session()->forget('username');
        $request->session()->forget('userid');

        return redirect('/');
    }
}