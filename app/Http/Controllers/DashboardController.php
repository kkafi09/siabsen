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
        $status = Kehadiran::select('status');

        // dd($jumlahKehadiran->get());

        return view('dashboard.index', [
            'title' => "Dashboard",
            'active' => "dashboard",
            'kehadiran' => $kehadiranHariIni->get(),
            'jumlah_kehadiran' => $jumlahKehadiran->get(),
            'status' => $status->get(),
            'kosong' => $status->count()

        ]);
    }

    public function profile()
    {
        $profile = User::where('email', auth()->user()->email)->first();

        return view('dashboard.profile', [
            'title' => "Profil",
            'active' => "profil-siswa",
            'profile' => $profile
        ]);
    }

    public function attendances(Kehadiran $kehadiran)
    {
        $search = $kehadiran->where('created_at', Carbon::now())
            ->where('id', auth()->user()->id);

        return view('dashboard.attendances', [
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
        $storedData['status'] = $request->input('attendance');
        $storedData['role'] = auth()->user()->role;

        Kehadiran::create($storedData);

        return redirect()->route('dashboard.attendances')->with('success', "Berhasil absen");
    }
}
