<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller {
    public function aboutus(Request $request) {
        $data = [
            'title' => "About Us",
            'active_menu' => 'aboutus'
        ];

        return view('user/aboutus/aboutus')->with($data);
    }
}