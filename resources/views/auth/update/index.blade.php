@extends('layouts.main')

@section('container')
    <h1>Update Password</h1>
    <form action="{{ route('password.update') }}" method="POST">
        @method('put')
        @csrf
        <div>
            <label for="current_password">Password Lama</label>
            <input type="password" name="current_password" id="current_password">
            @error('current_password')
               <div>{{  $message  }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password Baru</label>
            <input type="password" name="password" id="password">
            @error('password')
               <div>{{  $message  }}</div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Password Konfirmasi</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
               <div>{{  $message  }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
