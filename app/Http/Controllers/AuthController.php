<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

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

    public function register(){
        return view('end_user.register');
    }

    public function create(UserRequest $request){
        $model_user = new User();
        if ($model_user->createUser($request)){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect('/');
            }
        };
    }
}
