<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Exports\TeacherExport;
use App\Imports\StudentImport;
use App\Imports\TeacherImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{


    public function editProfile(User $user)
    {
        return view('admin.update', [
            "title" => "Update profile",
            "user" => $user
        ]);
    }

    public function updateProfile(Request $request, User $user)
    {
        $request->validate([
            'name' => 'string|min:3|max:191|required'
        ]);

        $user->where('email', $user->email)->update(['name' => $request->name]);
        return redirect(($user->role == "siswa" ? "student" : "teacher") . "/data")->with('message', "Your profile has been updated");
    }

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

    public function editPassword()
    {
        return view('auth.update.index', [
            "title" => "Update Password"
        ]);
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            $user->where('id', auth()->user()->id)->update(['password' => Hash::make($request->password)]);
            return back()->with("message", "Your Password has been updated");
        }

        throw ValidationException::withMessages([
            'current_password' => "Your current password doesn't match with our record"
        ]);
    }
}
