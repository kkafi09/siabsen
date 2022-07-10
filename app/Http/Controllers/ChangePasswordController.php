<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.changePassword.index', [
            "title" => "Ubah Password",
            "active" => "ubah-password"
        ]);
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
}
