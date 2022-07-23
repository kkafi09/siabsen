<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => "Dashboard Admin",
            'active' => "dashboard-admin"
        ]);
    }

    public function editStudents(){
        $students = User::where('role', "siswa")->get();

        return view("admin.edit-students", [
            'title' => "Edit Students",
            'active' => "edit-siswa",
            'students' => $students
        ]);
    }

    public function editTeachers(){
        $teachers = User::where('role', "guru")->get();

        return view('admin.edit-teachers', [
            'title' => "Edit Teachers",
            'active' => "edit-guru",
            'teachers' => $teachers
        ]);
    }
}
