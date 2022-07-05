<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Kehadiran $kehadiran){
        return view('dashboard.index',[
            'title' => "Dashboard",
            'active' => "dashboard",
            'kehadiran' => $kehadiran->all(),
        ]);
    }

    public function attendances(){
        return view('dashboard.attendances', [
            'title' => "Attendances",
            'active' => "attendances"
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
