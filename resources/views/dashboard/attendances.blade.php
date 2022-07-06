@extends('layouts.main')

@section('container')
<h1>Kehadiran hari ini</h1>
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')  }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(Illuminate\Support\Carbon::now()->between('06:00:00', '19:00:00') && $search->count())
    <form action="/attend" method="post">
        @csrf
        <select class="form-select" name="attendance">
            <option selected>Kehadiran anda..</option>
            <option value="hadir">Hadir</option>
            <option value="izin">Izin</option>
        </select>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endif

@endsection
