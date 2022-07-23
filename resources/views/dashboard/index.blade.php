@extends('layouts.main') @section('container')
<div class="wrapper p-4 w-full">
    <div class="alert-group grid gap-y-4">
        <div class="top-text">
            <h1 class="text-xl uppercase text-stone-500">Dashboard</h1>
            <p class="last-change text-stone-500 text-xs">
                Terakhir diperbarui: 2022-06-23 07:01:41
            </p>
        </div>
        <div class="phone-num w-full h-fit text-white p-3 font-bold bg-green-600">
            <p>NOMOR WA Anda adalah</p>
            <p>
                Pastikan No WA anda Aktif.
                <span class="font-normal"
                    >Klik
                    <a href="#" class="bg-white text-black">disini</a> untuk merubahnya</span
                >
            </p>
        </div>
        <div class="piket w-full h-fit text-white p-3 bg-blue-500">
            <p>
                <span class="font-bold">Piket pada hari ini </span>: Firmansyah
                Ayatullah, S.Kom dan Joni Setiyawan Saputra
            </p>
        </div>
    </div>
    <div class="maincontent flex flex-row gap-x-4 my-4">
        <div class="jamAbsen w-full">
            <div class="card-waktu text-white w-full flex flex-row p-4 bg-red-600">
                <div class="text w-2/3">
                    <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                    <p class="text-2xl">Waktu Habis</p>
                </div>
                <div class="w-1/3 logo grid content-center justify-items-end">
                    <i class="fa-solid fa- fa-3x fa-id-card"></i>
                </div>
            </div>
            <div class="info-kehadiran"></div>
        </div>
        <div class="calendar w-full"></div>
        <div class="card w-full" >
            @foreach ($kehadiran as $index => $hadir)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span>{{ $index + 1 }}.</span>
                    <span>{{ $hadir->name }}</span>
                    <small>{{ $hadir->kelas  }}</small>
                    <small>{{ $hadir->created_at->format('H:i:s')  }}</small>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
