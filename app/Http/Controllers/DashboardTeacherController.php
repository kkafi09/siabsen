<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardTeacherController extends Controller
{
    public function index(){
        return view('teachers.index', [
            'title' => "Dashboard",
            'active' => "dashboard"
        ]);
    }

    public function profile(){
        return view('teachers.profil', [
            'title' => "Profil",
            'active' => "profil"
        ]);
    }

    public function attendances(Kehadiran $kehadiran){
        $search = $kehadiran->where('created_at', '=', Carbon::now())
                            ->where('id', '=', auth()->user()->id);
        return view('students.dashboard.attendances', [
            'title' => "Attendances",
            'active' => "attendances",
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

        return redirect('/attendances')->with('success', "Berhasil absen");
    }
}
