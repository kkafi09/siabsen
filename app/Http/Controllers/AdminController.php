<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $attendances = Kehadiran::whereDate('created_at', Carbon::today());
        $alpha = Kehadiran::join('users', 'users.name', '!=', 'kehadirans.name')->whereDate('users.created_at', Carbon::today());

        return view('admin.index', [
            'title' => "Dashboard Admin",
            'users' => $users,
            'attendances' => $attendances,
            'alpha' => $alpha
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
}
