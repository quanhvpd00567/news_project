<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function login(){
        if (Auth::check()){
            return redirect()->route('admin.home.page');
        }
        return view('admin.pages.login.index');
    }

    public function postLogin(Request $request){

//        $model_user = new User();
//        $model_user->createUser();

        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'required' => ':attribute không để trống',
        ];

        $attributes = array(
            'email' => 'Email',
            'password' => 'Mật khẩu',
        );
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.category.list');
        }
        session()->flash('error', 'Email hoặc mật khẩu không đúng');
        return redirect()->route('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
