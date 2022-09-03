<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function index(){
        return view('auth.register.index', [
            'title' => "Register",
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|email:dns|unique:users,email',
            'kelas' => 'required',
            'password'=>'required|min:5|max:255'
        ]);

        $validatedData['nis'] = rand(100000, 1000000);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', "Sign up successfull! Please Sign in");
        return redirect("/login")->with('success', "Sign up successfull! Please Sign in");
    }
}
