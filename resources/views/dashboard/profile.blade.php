@extends('layouts.main')

@section('container')
    <h1>Ini Halaman Profil</h1>
    <p>{{ $profile->name  }}</p>
@endsection
