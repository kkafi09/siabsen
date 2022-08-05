@extends('layouts.main')
@section('container')
    <div class="wrapper p-4 w-full bg-backgroundColour">
        <div class="maincontent flex flex-col xl:flex-row gap-4 my-4">
            <div class="jamAbsen w-6/12 flex flex-col gap-y-6">
                <div class="calendar w-full h-2/4">
                    <div id='calendar' class="rounded-lg p-3 h-full bg-white">
                    </div>
                </div>
                <div
                    class="card-waktu rounded-xl text-white w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-gradient-to-r from-lightPurple to-purpleDark">
                    <div class="text w-2/3">
                        <p class=" text-md font-medium capitalize">Status presensi</p>
                        <p class="text-xs font-light"> Lakukan presensi untuk mengetahui kehadiranmu</p>
                        <p class="status my-6 text-2xl uppercase font-semibold"><span>belum absen</span></p>
                    </div>
                    <div class="w-1/3 logo grid content-center justify-items-end">
                        <span class="material-symbols-rounded"> </span>
                    </div>
                </div>
                <div
                    class="card-waktu rounded-xl text-white w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-gradient-to-r from-lightPurple to-purpleDark">
                    <div class="text w-2/3">
                        <p class=" text-md font-semibold capitalize">piket hari ini</p>
                        <p class="text-xs font-light"> Jika ada masalah laporkan pada guru piket dibawah!</p>
                        <div class="namaGuruPiket font-medium my-6">
                            <ul class="listguru px-3">
                                <li>
                                    <div class="guru1">
                                        <p>Firmansyah Ayatullah</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="guru2">
                                        <p>Muhammad Chusni Agus</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-1/3 logo grid content-center justify-items-end">
                        <span class="material-symbols-rounded"> </span>
                    </div>
                </div>

            </div>
            <div class="w-7/12 min-h-full gap-y-7 flex flex-col">
                <div class="top-panel flex flex-row gap-x-6">
                    <div class="100-kehadiran-pertama h-fit w-2/3 rounded-xl relative bg-semiwhite p-4">
                        <div class="header  bg-semiwhite text-black p-3">
                            <p class="text text-lg font-semibold align-text-top">100 Kehadiran Pertama</p>
                            <p class="kehadiran text-sm font-medium text-gray opacity-80">Yang tercepat yang akan tampil
                                disini</p>
                        </div>
                        <div class="daftarnama max-h-80 bg-semiblue p-3 rounded-lg w-full overflow-y-scroll ">
                            <ul class="list-daftar ">
                                @foreach ($kehadiran as $index => $hadir)
                                    <li class=" grid grid-cols-3 my-3">
                                        <div class="img">
                                            <img src="https://github.com/mdo.png" alt="" class="rounded-lg w-16">
                                        </div>
                                        <div class="text capitalize col-span-2 grid content-center">
                                            <p class="font-medium">{{ $index + 1 }}. {{ $hadir->name }}.</p>
                                            <small>{{ $hadir->kelas }} ({{ $hadir->created_at->format('H:i:s') }})</small>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="wrapper-credits flex flex-col relative ">
                        <div class="info-absen ">
                            <div class="info-kehadiran w-full h-fit drop-shadow-md relative ">
                                <div class="top w-full text-white h-auto p-3 bg-red-700  font-semibold">
                                    <p class="uppercase">persentase kehadiran <span class="persentase">0</span>%</p>
                                    <p class="text-xs">Berikut detail rekap kehadiran anda.</p>
                                </div>
                                <div class="content-kehadiran w-full h-auto p-3  bg-white">

                                </div>
                            </div>

                        </div>
                        <div
                            class="kafi card-waktu text-black w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-white">
                            <div class="text w-2/3">
                                <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                                <p class="text-2xl"> <span>Waktu Habis</span></p>
                            </div>
                            <div class="w-1/3 logo grid content-center justify-items-end">
                                <i class="fa-solid fa- fa-3x fa-id-card text-gray opacity-80"></i>
                            </div>
                        </div>
                        <div
                            class="atharafi card-waktu text-black w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-white">
                            <div class="text w-2/3">
                                <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                                <p class="text-2xl"> <span>Waktu Habis</span></p>
                            </div>
                            <div class="w-1/3 logo grid content-center justify-items-end">
                                <i class="fa-solid fa- fa-3x fa-id-card text-gray opacity-80"></i>
                            </div>
                        </div>
                        <div
                            class="adi card-waktu text-black w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-white">
                            <div class="text w-2/3">
                                <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                                <p class="text-2xl"> <span>Waktu Habis</span></p>
                            </div>
                            <div class="w-1/3 logo grid content-center justify-items-end">
                                <i class="fa-solid fa- fa-3x fa-id-card text-gray opacity-80"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-panel-info ">
                    <div
                        class="adi card-waktu text-black w-full  p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-semiwhite flex flex-col gap-y-7 rounded-lg">
                        <div class="text w-2/3">
                            <p class=" text-lg font-medium capitalize">Presentase Kehadiran</p>
                            <p class="text-xs"> Data kehadiran tertera dibawah jika ada yang janggal segera laporkan ke
                                guru piket yang bertugas</p>
                        </div>
                        <div class="progressbar w-full">
                            <progress id="progress" class="w-full progressbar good" value="97" max="100"> <span
                                    class="value">undefined</span> %</progress>
                        </div>
                        <div class="statusContainer grid grid-cols-4 gap-6 p-2">
                            <div
                                class="sakit w-full h-36 text-center bg-gradient-to-b grid grid-flow-col place-content-center from-lightPurpleInfo to-purpleInfo text-white rounded-lg">
                                <div class="wrapper items-center grid grid-flow-row gap-y-3">
                                    <div class="title uppercase font-semibold text-lg ">sakit</div>
                                    <div class="count"><span class="number text-3xl font-bold ">6</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="izin w-full h-36 text-center bg-gradient-to-b grid grid-flow-col place-content-center from-infoOrangeLight to-infoOrageDark text-white rounded-lg">
                                <div class="wrapper grid grid-flow-row gap-y-3">
                                    <div class="title uppercase font-semibold text-lg">izin</div>
                                    <div class="count"><span class="number text-3xl font-bold">6</span></div>
                                </div>
                            </div>
                            <div
                                class="dispen w-full h-36 text-center bg-gradient-to-b grid grid-flow-col place-content-center from-infoBlueLight to-infoBlueDark text-white rounded-lg">
                                <div class="wrapper grid grid-flow-row gap-y-3">
                                    <div class="title uppercase font-semibold text-lg">dispen</div>
                                    <div class="count"><span class="number text-3xl font-bold">6</span></div>
                                </div>
                            </div>
                            <div
                                class="alpha w-full h-36 text-center bg-gradient-to-b grid grid-flow-col place-content-center from-infoRedLight to-infoRedDark text-white rounded-lg">
                                <div class="wrapper grid grid-flow-row gap-y-3">
                                    <div class="title uppercase font-semibold text-lg">alpha</div>
                                    <div class="count"><span class="number text-3xl font-bold">6</span></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
