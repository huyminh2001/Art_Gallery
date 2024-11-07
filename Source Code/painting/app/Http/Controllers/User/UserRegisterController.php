<?php

namespace App\Http\Controllers\User;

use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DateTime;

class UserRegisterController extends Controller {
    public function register() {
        // $data = [
        //     'title' => "Register",
        //     'active_menu' => 'register'
        // ];

        return view('user/register/register');
    }

    public function proceed_register(Request $request) {
        if($request->has('btnRegister'))
        {
            $rules = [
                'username' => 'required|min:6|string|regex:/\w*$/|max:20|unique:account,username',
                'password' => 'required|min:6',
                'email' => 'required|email|regex:/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/|unique:account,email',
                'date_of_birth' => 'required|date|date_format:Y-m-d',
                'phone_number' => 'required|string|regex:/^[\+]?[(]?\d{2,3}[)]?[-\s\.]?\d{3}[-\s\.]?\d{4}$/',
            ];
            $data = [
                'username' => trim($request -> input('username')),
                'password' => password_hash(trim($request -> input('password')),PASSWORD_BCRYPT),
                'date_of_birth' => DateTime::createFromFormat('d/m/Y', $request -> input('date_of_birth'))-> format('Y-m-d'),
                'email' => trim($request -> input('email')),
                'phone_number' => $request -> input('phone_number'),
                'status' => 0,
                'role_id' => 2

            ];

            $validator = Validator::make($data, $rules,
            [
                'username.required' => 'Please enter a username.',
                'username.username' => 'The username is invalid.',
                'username.unique' => 'The username is already existed.',
                'username.min' => 'The username must be at least 6 characters long.',
                'username.max' => 'The username must be only 20 characters long.',
                'password.required' => 'Please enter the password.',
                'password.min' => 'The password must be at least 6 characters long.',
                'email.required' => 'Please enter your email.',
                'email.email' => 'The email is invalid.',
                'email.unique' => 'The email is already existed.',
                'date_of_birth.required' => 'Please enter a date',
                'date_of_birth.date' => 'The date is invalid',
                'phone_number.regex' => 'The phone number is invalid.',
            ]);

            if ($validator -> fails()) {
                return redirect('/register') -> withErrors($validator->errors());
            }
        }
        Account::create($data);
        return redirect('/login');
    }
}