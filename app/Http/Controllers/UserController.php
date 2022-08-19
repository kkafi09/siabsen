<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Exports\TeacherExport;
use App\Imports\StudentImport;
use App\Imports\TeacherImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function exportStudent()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }

    public function importStudent(Request $request)
    {
        Excel::import(new StudentImport, $request->file('excel'));

        return redirect()->back()->with('success', "All good!");
    }

    public function exportTeacher()
    {
        return Excel::download(new TeacherExport, 'teacher.xlsx');
    }

    public function importTeacher(Request $request)
    {
        Excel::import(new TeacherImport, $request->file('excel'));

        return redirect()->back()->with('success', "All good!");
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->back()->with('success', "User has been deleted");
    }
}
