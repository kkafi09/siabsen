<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => "Dashboard Admin",
            'active' => "dashboard-admin"
        ]);
    }

    public function editStudents(){
        return view("admin.edit-students", [
            'title' => "Edit Students",
            'active' => "edit-siswa"
        ]);
    }

    public function editTeachers(){
        return view('admin.edit-teachers', [
            'title' => "Edit Teachers",
            'active' => "edit-guru"
        ]);
    }
}
