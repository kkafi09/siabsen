<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Kehadiran $kehadiran)
    {
        //     $kehadiranHariIni = $kehadiran::whereDate('created_at', Carbon::today())
        //             ->whereTime('created_at', '>', '06:00:00')
        //             ->whereTime('created_at', '<', '09:00:00')->take(100);

        $kehadiranHariIni = $kehadiran::whereDate('created_at', Carbon::today())->take(100);

        return view('students.index', [
            'title' => "Dashboard",
            'active' => "dashboard",
            'kehadiran' => $kehadiranHariIni->get(),
        ]);
    }

    public function profile()
    {
        return view('students.profil', [
            'title' => "Profil",
            'active' => "profil-siswa",
            // 'profile' => $profil_siswa
        ]);
    }

    public function attendances(Kehadiran $kehadiran)
    {
        $search = $kehadiran->where('created_at', '=', Carbon::now())
            ->where('id', '=', auth()->user()->id);
        return view('students.attendances', [
            'title' => "Attendances",
            'active' => "kehadiran-siswa",
            'search' => $search->get()
        ]);
    }

    public function store(Request $request)
    {
        $storedData = $request->validate([
            'attendance' => 'required',
        ]);

        $storedData['name'] = auth()->user()->name;
        $storedData['kelas'] = auth()->user()->kelas;

        Kehadiran::create($storedData);

        return redirect('/kehadiran-siswa')->with('success', "Berhasil absen");
    }
}
