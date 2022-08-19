@extends('layouts.main')

@section('container')
    <h1>Ini Halaman edit students</h1>
    <a href="{{ route('dashboard.export.student.excel') }}">Export to excel</a>
    <form action="{{ route('dashboard.import.student.excel') }}" enctype="multipart/form-data" method="POST">
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
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->kelas }}</td>
                    <td>
                        <a href="/{{ $student->email }}/edit" class="badge bg-warning border-0">
                            Edit
                        </a>
                        <form action="/delete/{{ $student->email }}" method="POST" class="d-inline">
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
