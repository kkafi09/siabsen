@extends('layouts.main')

@section('container')
<div class="wrapper p-4 w-full">
    <div class="alert-group grid gap-y-4 ">
        <div class="top-text">
            <h1 class="text-xl uppercase text-stone-500">Dashboard</h1>
            <p class="last-change text-stone-500 text-xs">Terakhir diperbarui: 2022-06-23 07:01:41</p>
        </div>
        <div class="phone-num w-full h-fit text-white p-3 font-bold bg-green-600">
            <p>NOMOR WA Anda adalah </p>
            <p>Pastikan No WA anda Aktif. <span class="font-normal">Klik <a href="#" class="bg-white text-black">disini</a> untuk merubahnya</span></p>
        </div>
        <div class="piket">
            <p><span>Piket pada hari ini </span>: Firmansyah Ayatullah, S.Kom dan Joni Setiyawan Saputra</p>
        </div>
    </div>
    @foreach ($kehadiran as $index => $hadir)
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span>{{ $index+1  }}.</span>
                    <span>{{ $hadir->name }}</span>
                    <small>{{ $hadir->kelas  }}</small>
                    <small>{{ $hadir->created_at->format('H:i:s')  }}</small>
                </li>
            </ul>
        </div>
        @endforeach
    @endsection
</div>
