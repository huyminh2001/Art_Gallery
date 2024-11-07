<?php

namespace App\Http\Controllers\User;

use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller {
    public function login() {
        $data = [
            'title' => "Login",
            'active_menu' => 'login'
        ];

        return view('user/login/login')->with($data);
    }

    // public function login_proceed(Request $request) {
    //     $username = $request->post('username');
    //     $password = $request->post('password');
    //     // $hash_bcrypt = password_hash($password, PASSWORD_BCRYPT);

    //     $db_username = Account::pluck('username');
    //     $db_password = Account::pluck('password'); // **** DOI THANH PASSWORD SAU KHI EDIT DB
    //     $db_id = Account::pluck('id');
    //     $db_role = Account::pluck('role_id');

    //     $rules = [
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, [
    //         'username.required' => 'Please enter username.',
    //         'password.required' => 'Please enter password.',
    //     ]);

    //     for ($i = 0; $i < count($db_username); $i++ ) {
    //         if(($username == $db_username[$i]) && (password_verify($password, $db_password[$i])) && ($db_role[$i] == 2)) {
    //             $request->session()->put('username', $username);
    //             $request->session()->put('userid', $db_id[$i]);
    //             return redirect('/');
    //             break;
    //         } else if ($validator -> fails()) {
    //             // $data = [
    //             //     'msg' => 'Invalid input. Please try again.',
    //             //     'db_username' => $db_username,
    //             //     'db_password' => $db_password,
    //             // ];
    //             return redirect('/login')->withErrors($validator->errors());
    //         }
    //     }
    // }

    public function login_proceed(Request $request) {

        if($request->has('btnLogIn')){
        
            $rules = [
            'username' => 'required|string',
            'password' => 'required|string',
            ];
        
            $validator = Validator::make($request->all(), $rules, [
            'username.required' => 'Please enter username.',
            'password.required' => 'Please enter password.',
            ]);
        
            if ($validator->fails()) {
            return redirect('/login')->withErrors($validator->errors());
            }
        

            // $username = $request->post('username');
            // $password = $request->post('password');
            $usernameInput = $request->input('username');
            $user = Account::where('username', $usernameInput)->first();

            $passwordInput = $request->input('password');

            if($user){

                if ($user && Hash::check($passwordInput, $user->password)) {
                    if ($user -> role_id == 2) {
                    $request->session()->put('username', $user -> username);
                    $request->session()->put('userid', $user -> id); // Use user ID from Auth
                    return redirect('/');
                    }
                } 
            }
            
            return redirect('/login')->withErrors(['username' => 'Invalid username or password.',
                                                   'password' => 'Invalid username or password.',     
                                                 ]);
            
        }
    }
}