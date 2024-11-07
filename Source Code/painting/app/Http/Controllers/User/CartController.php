<?php

namespace App\Http\Controllers\User;

use App\Models\Painting;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class CartController extends Controller {
    public function cart(Request $request) {
        // $testabc = Cart::where('account_id',$userid)->orderBy('id','desc')->first();
        $userid = $request->session()->get('userid');
        $cart = Cart::where('account_id', $userid)->get();
        
        $data = [
            'title' => "Cart",
            'active_menu' => 'cart',
            'carts' => DB::table('painting')->where('account_cart.account_id',$userid)->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->join('photos', 'photos.painting_id', '=', 'painting.id')->select('account_cart.*', 'painting.name as paintingName', 'painting.price as paintingPrice', 'photos.name as photoName', 'painting.id as paintingId')->get(),
            'payments' => Payment::get(),

            'testcart' => Cart::where('account_id',$userid)->orderBy('id','desc')->first(),
            // 'testcartid' => $testabc ? $testabc['id'] : 'No items',
            'testdate' => Carbon::now('Asia/Ho_Chi_Minh')->toDateString(),
            'testuserid' => $request->session()->get('userid'),
            'testcartarray' => $cart,
            'testcartarray_count' => count($cart)
        ];

        return view('user/cart/cart')->with($data);
    }

    public function proceed_checkout(Request $request) {
        $userid = $request->session()->get('userid');

        $cart = Cart::where('account_id', $userid)->get();

        if ($cart->isEmpty()) {
            return back()->with('error', 'Your cart is empty!');
        }

        // Create order
        $order = new Order;
        $order->account_id = $userid;
        $order->created_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $order->delivery_address = $request->get('address'); //[EDIT] sua lai post sau edit
        $order->status = 0;
        $order->update_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $order->payment_method_id = $request->get('payment_method_id');
        $order->save();

        // Create order details
        foreach ($cart as $cartItem) {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id;
            $orderDetail->painting_id = $cartItem->painting_id;
            $price = Painting::find($cartItem->painting_id)->price;
            $orderDetail->price = $price;
            $orderDetail->quantity = $cartItem->quantity; // [EDIT-DONE] sua lai thanh cartItem->quantity sau khi edit db
            $orderDetail->save();
        }

        // Clear account's cart
        Cart::where('account_id', $userid)->delete();

        return redirect('/');
    }

    public function proceed_cart_item_delete($cartid) {
        Cart::where('id', $cartid)->delete();

        return back();
    }
}