<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('end_user.login');
    }
    public function authentication(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        session()->flash('error', 'Email or password invalid');
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
