@extends('layouts.auth')

@section('container')
<div class="container col-xl-10 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')  }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError')  }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Login Siakad</h1>
            <p class="col-lg-10 fs-4">by <a target="_blank" href="">Kafanal Kafi</a></p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/login">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
                    <label for="password">Password</label>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button class="w-100 btn btn-md btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="/register">Sign up</a>
            </small>
        </div>
    </div>
</div>
@endsection
