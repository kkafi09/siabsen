<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardTeacherController extends Controller
{
    public function index(){
        return view('teachers.index', [
            'title' => "Dashboard",
        ]);
    }

    public function profile(){
        $profil_guru = User::where('id', auth()->user()->id)->first();

        return view('teachers.profil', [
            'title' => "Profil",
            'profile' => $profil_guru
        ]);
    }

    public function attendances(Kehadiran $kehadiran){
        $search = $kehadiran->where('created_at', '=', Carbon::now())
                            ->where('id', '=', auth()->user()->id);

        return view('students.attendances', [
            'title' => "Attendances",
            'search' => $search->get()
        ]);
    }

    public function store(Request $request){
        $storedData = $request->validate([
            'attendance'=>'required',
        ]);

        $storedData['name'] = auth()->user()->name;
        $storedData['kelas'] = auth()->user()->kelas;

        Kehadiran::create($storedData);

        return redirect('/kehadiran-guru')->with('success', "Berhasil absen");
    }
}
