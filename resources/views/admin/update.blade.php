@extends('layouts.main');

@section('container')
    <h1>Ini adalah halaman update data</h1>
    <div>
        <form action="/update/{{ $user->email }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" value="{{ old('nis', $user->nis) }}" disabled>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="role">Role</label>
                <select name="role" id="role">
                    <option value="" disabled>Role</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
                @error('role')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="" disabled selected>Role</option>
                    <option value="laki-laki">Laki - laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <select class="@error('kelas') is-invalid @enderror" name="kelas">
                    <option disabled selected>Kelas</option>
                    <option value="X RPL 6">X RPL 1</option>
                    <option value="X RPL 6">X RPL 2</option>
                    <option value="X RPL 6">X RPL 3</option>
                    <option value="X RPL 6">X RPL 4</option>
                    <option value="X RPL 6">X RPL 5</option>
                    <option value="X RPL 6">X RPL 6</option>
                    <option value="X RPL 7">X RPL 7</option>
                    <option value="X RPL 8">X RPL 8</option>
                </select>
                <label for="id">Kelas</label>
                @error('kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir', $user->tempat_lahir) }}">
                @error('tempat_lahir')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="tanggal_lahir">Tempat Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}">
                @error('tanggal_lahir')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Update Profil</button>
        </form>
    </div>
@endsection
