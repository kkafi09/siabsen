@extends('layouts.main');

@section('container')
    <h1>Ini adalah halaman update data</h1>
    <div>
        <form action="/update/{{ $user->email  }}" method="POST">
            @csrf
            @method('put')

            <div>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name ) }}">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Update Profil</button>
        </form>
    </div>
@endsection
