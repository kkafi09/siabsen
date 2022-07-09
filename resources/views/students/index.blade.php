@extends('layouts.main')

@section('container')
    <h1>Ini halaman dashboard</h1>
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
