<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'title' => "Dashboard",
            'active' => "dashboard",
        ]);
    }

    public function attendances(){
        return view('dashboard.attendances', [
            'title' => "Attendances",
            'active' => "attendances"
        ]);
    }

}
