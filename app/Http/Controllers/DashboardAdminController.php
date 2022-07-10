<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $students = User::where('role', "siswa")->all();

        return view("admin.edit-students", [
            'title' => "Edit Students",
            'active' => "edit-siswa",
            'students' => $students
        ]);
    }

    public function editTeachers(){
        $teachers = User::where('role', "guru")->all();

        return view('admin.edit-teachers', [
            'title' => "Edit Teachers",
            'active' => "edit-guru",
            'teachers' => $teachers
        ]);
    }
}
