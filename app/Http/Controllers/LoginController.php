<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.index', [
            'title' => "Login",
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role == "admin"){
                return redirect()->route("dashboard.admin");
            }else{
                return redirect()->route("dashboard.index");
            }
        }

        return back()->with('error', "Email dan Password Salah");

    }

    public function update() {
        return view("auth.resetPassword.index", [
            'title' => "Reset Password",
            'active' => "reset"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
