<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Http\Controllers\Auth;

class AuthController extends Controller
{
    
    public function view_login()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request){
    
        // proses data login yang dikirimkan melalui form dengan HTTP method POST.
        $email = $request->post('email');
        $password = $request->post('password');

        $credentials=[
            "email"=> $email,
            "password" => $password
        ];

        if (Auth::attempt($credentials)){
            dd([
                "message"=> "sukses"
            ]);
        }
        return redirect()->back();
       
    }
}