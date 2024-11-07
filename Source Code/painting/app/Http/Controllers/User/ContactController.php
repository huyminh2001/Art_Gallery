<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function contact(Request $request) {
        $data = [
            'title' => "Contact",
            'active_menu' => 'contact'
        ];

        return view('user/contact/contact')->with($data);
    }
}