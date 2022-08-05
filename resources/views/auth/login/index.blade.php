@extends('layouts.auth')

@section('container')
<div class="container content-center overflow-x-hidden  ">
    <div class="row grid justify-items-center g-lg-5 py-5">
        @if (session()->has('success'))
        <div class="alert alert-success w-2/3 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert  w-2/3 alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="py-5 grid justify-items-center bg-white  w-1/3">
            <div class="col-lg-7 text-center w-full ">
                <h1 class="display-4 text-3xl font-semibold text-gray-500">Si<span
                        class="text-red-700 uppercase font-bold">absen</span></h1>
            </div>
            <form class="px-4 py-5 w-full" method="post" action="/login">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Email" autofocus value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
<<<<<<< HEAD
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
=======
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
>>>>>>> 84d7f058281557fd851d3693cacb5c304fe49a22
                    @enderror
                </div>
                <button class="w-100 btn bg-red-700 text-white" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="/register">Sign up</a>
            </small>
        </div>
    </div>
</div>
@endsection
