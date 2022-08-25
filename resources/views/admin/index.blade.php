@extends("layouts.main")

@section('container')
<div class="wrapper-admin flex flex-row w-full gap-x-8 p-12">
    <div class="data-data w-full ">
        <div class="container-wrapper  flex flex-col w-full gap-y-8">
            <div class="jumlah-user flex flex-row gap-x-6 ">

                <div
                    class="data-siswa text-gray w-full bg-white gap-y-4 py-4 rounded-xl text-center flex flex-col relative ">
                    <div class="total">
                        <p class="total-siswa text-xs font-medium opacity-80">Total siswa</p>
                        <p class="angka-siswa font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'siswa')->count() }}</p>
                    </div>
                    <div class="laki">
                        <p class="total-siswa-lelaki text-xs font-medium opacity-80">Laki Laki</p>
                        <p class="angka-siswa-lelaki font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'siswa')->where('jenis_kelamin', 'L')->count() }}</p>
                    </div>
                    <div class="perempuan mb-4">
                        <p class="total-siswa-perempuan text-xs font-medium opacity-80">Perempuan</p>
                        <p class="angka-siswa-perempuan font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'siswa')->where('jenis_kelamin', 'P')->count() }}</p>
                    </div>
                    <div
                        class="footer absolute bottom-0 w-full text-sm font-semibold bg-gray rounded-b-xl text-white p-1">
                        <p>Data Siswa</p>
                    </div>
                </div>
                <div
                    class="data-guru text-gray w-full bg-white gap-y-4 py-4 rounded-xl text-center flex flex-col relative ">
                    <div class="total">
                        <p class="total-Guru text-xs font-medium opacity-80">Total Guru</p>
                        <p class="angka-Guru font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'guru')->count() }}</p>
                    </div>
                    <div class="laki">
                        <p class="total-Guru-lelaki text-xs font-medium opacity-80">Laki Laki</p>
                        <p class="angka-Guru-lelaki font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'guru')->where('jenis_kelamin', 'L')->count() }}</p>
                    </div>
                    <div class="perempuan mb-4">
                        <p class="total-Guru-perempuan text-xs font-medium opacity-80">Perempuan</p>
                        <p class="angka-Guru-perempuan font-extrabold text-xl text-fontColor">{{ $users->where('role',
                            'guru')->where('jenis_kelamin', 'P')->count() }}</p>
                    </div>
                    <div
                        class="footer absolute bottom-0 w-full text-sm font-semibold bg-gray rounded-b-xl text-white p-1">
                        <p>Data Guru</p>
                    </div>
                </div>

            </div>
            <div class="Masuk-BelumAbsen flex flex-row gap-8 w-full">
                <div class="belum-absen w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $alpha->where('users.role', 'siswa')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $alpha->where('users.role', 'guru')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-belumAbsenLight to-belumAbsenDark absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Belum Absen</p>
                    </div>
                </div>
                <div class="masuk w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'siswa')->where('status', 'masuk')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'guru')->where('status', 'masuk')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-masukLight to-masukDark absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Masuk</p>
                    </div>
                </div>
            </div>
            <div class="Sakit-Izin flex flex-row gap-8 w-full">
                <div class="Sakit w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'siswa')->where('status', 'sakit')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'guru')->where('status', 'sakit')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-lightPurple to-fontColor absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Sakit</p>
                    </div>
                </div>
                <div class="Izin w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'siswa')->where('status', 'izin')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'guru')->where('status', 'izin')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-infoOrangeLight to-infoOrageDark absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Izin</p>
                    </div>
                </div>
            </div>
            <div class="Dispen-Alpha flex flex-row gap-8 w-full">
                <div class="Dispen w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'siswa')->where('status', 'dispensasi')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'guru')->where('status', 'dispensasi')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-infoBlueLight to-infoBlueDark absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Dispensasi</p>
                    </div>
                </div>
                <div class="Alpha w-full bg-white relative py-4 rounded-xl">
                    <div class="container text-center">
                        <div class="text flex-row flex mb-4 divide-x-2 text-divColor ">
                            <div class="siswa w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Siswa</p>
                                <p class="angka-siswa font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'siswa')->where('status', 'alpha')->count() }}</p>
                            </div>
                            <div class="guru w-full">
                                <p class="judul text-xs font-medium text-gray opacity-80">Guru</p>
                                <p class="angka-guru font-extrabold text-xl text-fontColor">{{
                                    $attendances->where('role', 'guru')->where('status', 'alpha')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="footer bg-gradient-to-r from-infoRedLight to-infoRedDark absolute text-center bottom-0 w-full text-sm font-semibold rounded-b-xl text-white p-1">
                        <p>Alpha</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="daftar w-full rounded-xl h-full relative -z-10   bg-white px-3 py-9">
        <div class="waktu flex-row flex w-full">
            <div class="tanggal text-center w-full">
                <p class="tanggal text-gray opacity-80 text-sm font-medium">Tanggal</p>
                <p class="text-xl    text-fontColor font-extrabold"><span class="tgl" id="tgl">{{
                        Carbon\Carbon::now()->isoFormat('DD-MM-YYYY');}}</span></p>
            </div>
            <div class="jam text-center w-full">
                <p class="jam text-gray opacity-80 text-sm font-medium">Pukul</p>
                <p class="text-xl    text-fontColor font-extrabold"><span class="jam" id="jam"></span></p>
            </div>
        </div>
        <div class="guruPiket my-10">
            <p class="text-gray opacity-80 text-xs font-medium">Guru Piket Hari Ini</p>
            <div class="daftarGuru">
                <ul class="text-sm font-bold text-fontColor pl-7 mt-2">
                    <li>Achmad Ilham Ramadhani</li>
                    <li>Zainul Abidin</li>
                </ul>
            </div>
        </div>
        <div class="guruPiket-selanjutnya mb-10">
            <p class="text-gray opacity-80 text-xs font-medium">Guru Piket Selanjutnya</p>
            <div class="daftarGuru">
                <ul class="text-sm font-bold text-fontColor pl-7 mt-2">
                    <li>Achmad Ilham Ramadhani</li>
                    <li>Zainul Abidin</li>
                </ul>
            </div>
        </div>
        <p class="text-gray opacity-80 text-xs font-medium ">Tabel Jadwal Guru Piket</p>
        <div class="tableGuruPiket w-full max-h-60 overflow-y-scroll ">
            <table class="table-auto gurupiketTable text-xs mt-3  text-tableCol w-full ">
                <thead class=" ">
                    <tr class="">
                        <th class="p-2 border text-center">id_piket</th>
                        <th class="p-2 border text-center">tanggal_piket</th>
                        <th class="p-2 border text-center">guru_piket_1</th>
                        <th class="p-2 border text-center">guru_piket_2</th>
                    </tr>
                </thead>
                <tbody class=" ">
                    <tr class="">
                        <td class="p-2 border ">PKT001</td>
                        <td class="p-2 border ">22/08/2022</td>
                        <td class="p-2 border ">Achmad Ilham Ramadhani</td>
                        <td class="p-2 border ">Zainul Abidin</td>
                    </tr>
                    <tr class="">
                        <td class="p-2 border ">PKT001</td>
                        <td class="p-2 border ">22/08/2022</td>
                        <td class="p-2 border ">Achmad Ilham Ramadhani</td>
                        <td class="p-2 border ">Zainul Abidin</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection