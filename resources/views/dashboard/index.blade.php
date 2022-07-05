@extends('layouts.main')

@section('container')
    <h1>Ini halaman dashboard</h1>
    @foreach ($kehadiran as $hadir)
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <span>{{ $hadir->name }}</span>
                <small>{{ $hadir->kelas  }}</small>
                <small>{{ $hadir->timestamps  }}</small>
            </li>
        </ul>
    </div>
    @endforeach
@endsection
