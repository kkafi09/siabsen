@extends('layouts.main')

@section('container')
<div class="wrapper flex flex-col gap-y-4 h-screen px-5 py-3 bg-backgroundColour">
    <div class="topBar">
        <div class="title w-full bg-semiwhite p-4 rounded-2xl">
            <h1 class="text-xl font-semibold text-gray">Kehadiran hari ini</h1>
            <p class="text-xs text-gray opacity-80">Lakukan absensi dibawah untuk melakukan konfirmasi status kehadiran
            </p>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="form w-full h-fit text-purpleDark font-semibold bg-semiwhite p-4 rounded-2xl">
        @if (Carbon\Carbon::now()->between('06:00:00', '10:00:00') && $search->count() != 0)
        <form action="/attend" method="post" class="flex flex-col gap-y-5 ">
            @csrf
            <div class="bg-semiblue px-4 rounded-xl py-3 masuk">
                <input type="radio" name="attendance" id="" value="masuk">
                <label for="attendance" class="ml-4">Masuk</label>
            </div>
            <div class="bg-semiblue px-4 rounded-xl py-3 sakit">
                <input type="radio" name="attendance" id="" value="sakit">
                <label for="attendance" class="ml-4">Sakit</label>
            </div>
            <div class="bg-semiblue px-4 rounded-xl py-3 izin">
                <input type="radio" name="attendance" id="" value="izin">
                <label for="attendance" class="ml-4">Izin</label>
            </div>
            <div class="bg-semiblue px-4 rounded-xl py-3 dispen">
                <input type="radio" name="attendance" id="" value="dispensasi">
                <label for="attendance" class="ml-4">Dispensasi</label>
            </div>


            <button type="submit"
                class="p-2 rounded-xl bg-gradient-to-r text-white from-lightPurpleInfo to-purpleInfo">Submit</button>
        </form>
        @else
        <p class="text-2xl">Absen Sudah ditutup!</p>
        @endif

    </div>
</div>
@endsection