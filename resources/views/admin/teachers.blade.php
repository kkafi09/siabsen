@extends('layouts.main')

@section('container')
    <h1>Ini Halaman edit teachers</h1>
    <a href="{{ route('dashboard.export.teacher.excel') }}">Export to excel</a>
    <form action="{{ route('dashboard.import.teacher.excel') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="file" name="excel">
        <button type="submit">Import</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->kelas }}</td>
                    <td>
                        <a href="/{{ $teacher->email }}/edit" class="badge bg-warning border-0">
                            Edit
                        </a>
                        <form action="/delete/{{ $teacher->email }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
