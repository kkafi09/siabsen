<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => "Dashboard Admin",
        ]);
    }

    public function dataStudents()
    {
        $students = User::where('role', "siswa")->get();

        return view("admin.students", [
            'title' => "Data Students",
            'students' => $students
        ]);
    }

    public function dataTeachers()
    {
        $teachers = User::where('role', "guru")->get();

        return view('admin.teachers', [
            'title' => "Edit Teachers",
            'teachers' => $teachers
        ]);
    }

    public function studentExport()
    {
    }
}
