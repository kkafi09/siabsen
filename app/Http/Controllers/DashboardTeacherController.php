<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTeacherController extends Controller
{
    public function index(){
        return view('teachers.index', [
            'title' => "Dashboard",
            'active' => "dashboard"
        ]);
    }
}
