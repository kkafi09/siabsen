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
        // $kehadiranHariIni = $kehadiran::whereDate('created_at', Carbon::today())
        //         ->whereTime('created_at', '>', '06:00:00')
        //         ->whereTime('created_at', '<', '09:00:00')->take(100)
        //         ->where('role', auth()->user()->role);


        $kehadiranHariIni = $kehadiran::whereDate('created_at', Carbon::today())->where('role', auth()->user()->role)->where('status', 'masuk')->take(100);
        $jumlahKehadiran = $kehadiran::where('role', auth()->user()->role)->select('status');
        $status = Kehadiran::where('name', auth()->user()->name)->select('status');
        $bgCol = "bg-gradient-to-r from-belumAbsenLight to-belumAbsenDark";
        // dd($jumlahKehadiran->get());

        return view('dashboard.index', [
            'title' => "Dashboard",
            'kehadiran' => $kehadiranHariIni->get(),
            'jumlah_kehadiran' => $jumlahKehadiran->get(),
            'status' => $status->get(),
            'kosong' => $status->count(),
            "bgCol" => $bgCol

        ]);
    }

    public function profile()
    {
        $profile = User::where('email', auth()->user()->email)->first();

        return view('dashboard.profile', [
            'title' => "Profil",
            'profile' => $profile
        ]);
    }

    public function attendances(Kehadiran $kehadiran)
    {
        $search = $kehadiran->whereDate('created_at', Carbon::today())->where('user_id', auth()->user()->id);
        return view('dashboard.attendances', [
            'title' => "Attendances",
            'search' => $search->get()
        ]);
    }

    public function store(Request $request, Kehadiran $kehadiran)
    {
        $storedData = $request->validate([
            'attendance' => 'required',
        ]);

        $storedData['user_id'] = auth()->user()->id;
        $storedData['kelas'] = auth()->user()->kelas;
        $storedData['status'] = $request->input('attendance');
        $storedData['role'] = auth()->user()->role;
        $storedData['start_time'] = Carbon::now();

        $kehadiran::create($storedData);

        return redirect()->route('dashboard.attendances')->with('success');
    }

    public function dataAttendances(Kehadiran $kehadiran)
    {
        $dataAttend = $kehadiran::where('name', auth()->user()->name)->get();

        return view('dashboard.dataAttendances', [
            'title' => "Data Absensi",
            'attendances' => $dataAttend
        ]);
    }
}
