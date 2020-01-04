<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin_dashboard');
        }
        return redirect()->route('admin_login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin_login');
    }
}
