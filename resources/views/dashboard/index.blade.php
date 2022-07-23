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
            <div class="card-waktu text-black w-full flex flex-row p-3 drop-shadow-[0_0_10px_rgba(0,0,0,0.4)] bg-white">
                <div class="text w-2/3">
                    <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                    <p class="text-2xl"> <span>Waktu Habis</span></p>
                </div>
                <div class="w-1/3 logo grid content-center justify-items-end">
                    <i class="fa-solid fa- fa-3x fa-id-card text-gray-300"></i>
                </div>
            </div>
            <div class="info-kehadiran w-full h-fit">
                <div class="top w-full text-white h-auto p-3 bg-red-700 mt-4 font-semibold">
                    <p class="uppercase">persentase kehadiran <span class="persentase">0</span>%</p>
                    <p class="text-xs">Berikut detail rekap kehadiran anda.</p>
                </div>
                <div class="content-kehadiran w-full h-auto p-3  bg-white">
                    <div class="daftar-keterangan text-sm border-2 grid grid-flow-row divide-y">
                        <div class="sakit grid grid-flow-col p-3">
                            <p class="sakit">sakit</p>
                        </div>
                        <div class="izin grid grid-flow-col p-3">
                            <p class="izin">izin</p>
                        </div>
                        <div class="dispen grid grid-flow-col p-3">
                            <p class="dispensasi">dispensasi</p>
                        </div>
                        <div class="alpha grid grid-flow-col p-3">
                            <p class="alpha">alpha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calendar w-full"></div>
        <div class="card w-full h-fit " >
            @foreach ($kehadiran as $index => $hadir)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span>{{ $index + 1 }}.</span>
                    <span>{{ $hadir->name }}</span>
                    <small>{{ $hadir->kelas  }}</small>
                    <small>{{ $hadir->created_at->format('H:i:s')  }}</small>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
