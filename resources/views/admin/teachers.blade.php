@extends('layouts.main')

@section('container')
<div class="wrapper py-3 px-5 w-full h-full bg-backgroundColour">
    <div class="header-text text-black w-full bg-semiwhite p-3 rounded-lg">
        <h1 class="text-xl font-bold">Data Guru</h1>
        {{-- <a href="{{ route('dashboard.export.teacher.excel') }}">Export to excel</a> --}}
        <form action="{{ route('dashboard.import.teacher.excel') }}" enctype="multipart/form-data" method="POST"
            class="flex flex-row">
            @csrf
            <input type="file" name="excel"
                class="form text-sm p-2 rounded-lg border-2 border-collapse border-fontColor w-full">
            <div class="button w-full text-center">
                <button type="submit"
                    class="bg-gradient-to-r from-infoBlueLight to-infoBlueDark p-2 rounded-lg w-1/3 text-sm font-bold text-semiwhite">Import</button>
                <button
                    class="bg-gradient-to-r from-infoBlueLight to-infoBlueDark p-2 rounded-lg w-1/3 text-sm font-bold text-semiwhite">
                    <a href="{{ route('dashboard.export.teacher.excel') }}" class="p-3 px-4">Export
                        to excel</a>
                </button>
            </div>
        </form>
    </div>
    <div
        class="isiData text-sm font-light w-full max-h-screen overflow-y-scroll p-4 rounded-xl bg-semiwhite mt-3 gap-x-4 flex flex-row">
        <table class="table text-fontColor">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">JK</th>
                    <th scope="col">Tanggal Lahir</th>
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
    </div>
    @endsection
