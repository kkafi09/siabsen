@extends('layouts.main');

@section('container')
    <h1>Ini adalah halaman update profile</h1>
    <div>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('put')

            <div>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Update Profil</button>
        </form>
    </div>
@endsection
