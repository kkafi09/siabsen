@extends('layouts.auth')

@section('container')
<div class="container col-xl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="mx-auto col-lg-8">
            <h4 class="text-center mb-3 fw-normal">Sign up Now!</h4>

            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/register">
                @csrf
                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name')  }}">
                    <label for="id">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@gmail.com" value="{{ old('email')  }}">
                    <label for="name">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <small class="d-block text-center mt-3">
                    Already have account? <a href="/login">Sign in</a>
                </small>
            </form>
        </div>
    </div>
</div>
@endsection
