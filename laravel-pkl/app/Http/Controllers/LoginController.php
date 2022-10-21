<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }
        return redirect('login');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }
    
   

    public function register()
    {
        return view('Login.register');
    }
    
    


}
