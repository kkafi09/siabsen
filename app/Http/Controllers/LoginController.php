<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
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
            if(auth()->user()->role == "guru"){
                return redirect()->route("dashboard-guru");
            } else if(auth()->user()->role == "admin"){
                return redirect()->route("dashboard-admin");
            }else{
                return redirect()->route("dashboard-siswa");
            }
        }

        return back()->with('error', "Email dan Password Salah");

    }

    public function update(Request $request){

        $request->validate([
            'current-password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){
            // auth()->user()->update(['password'-> bcrypt($request->password)]);
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->password);
            $user->save();

            return back()->with("success", "Your password has been updated");
        }

        throw ValidationException::withMessages([
            'current_password' => "Your current password doesn't match"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
