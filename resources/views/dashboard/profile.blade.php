@extends('layouts.main')

@section('container')
<div class="wrapper py-3 px-5 w-full h-full bg-backgroundColour">
    <div class="header-text text-black w-full bg-semiwhite p-3 rounded-lg">
        <h1 class="capitalize font-semibold text-xl text-gray">Data profil: {{ $profile->name }}</h1>
        <p class="text-xs text-gray opacity-80">Data diri yang tampil seharusnya harus sama dengan data yang ada di
            raport</p>
    </div>
    <div class="isiData text-sm font-light w-full h-fit p-4 rounded-xl bg-semiwhite mt-3 gap-x-4 flex flex-row">

        @endsection