@extends('layouts.auth')

@section('container')
<div class="content-center flex flex-row w-screen min-h-screen ">
    <div class="row grid justify-items-center w-2/4 g-lg-5 py-5 px-4 bg-white">
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
        <div class="py-5 flex pr-10 flex-col gap-y-12 justify-items-center h-fit w-screen md:w-full">
            <h1 class="siAbsen text absolute top-5 text-fontColor font-semibold text-2xl md:hidden">siAbsen</h1>
            <div class="title flex flex-col gap-y-2 w-full">
                <div class="h1-bigtitle flex flex-col gap-y-2 font-bold  text-2xl text-gray ">
                    <h1 class="font-sans">Selamat Pagi!</h1>
                    <h1 class="">Masuk ke siAbsen</h1>
                </div>
                <p class="text-xs font-medium text-left text-gray opacity-80">Pelaporan juga pengelolaan data akademik
                    dan data lainnya
                </p>
            </div>

            <form class=" w-full" method="post" action="/login">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control bg-backgroundColour rounded-xl border-none @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control my-12 bg-backgroundColour rounded-xl border-none @error('password') is-invalid @enderror" id="password" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn bg-gradient-to-r rounded-lg from-lightPurple to-purpleDark text-white" type="submit">Masuk</button>
                <small class="d-block text-center text-gray mt-3 font-medium">
                    Tidak bisa masuk? <a href="/register" class="text-fontColor">Hubungi kami</a>
                </small>
            </form>

            <div class="credits font-sans w-full h-fit relative top-32 text-gray">
                <p class="flex w-full flex-row bottom-12 gap-x-2 absolute justify-center font-semibold text-xs">
                    Desain ilustrasi oleh <img class="w-1/6 " src="{{ asset('/image/credit-freepik.png') }}">
                </p>
            </div>
        </div>
    </div>
    <div class="illustration-section hidden md:flex md:flex-col h-full right-0 w-full bg-gradient-to-r from-lightPurple to-purpleDark">
        <div class="siabsen text-end m-8 text-white font-semibold text-2xl">
            <h1>siAbsen</h1>
        </div>
        <div class="image grid place-items-center">
            <img class="w-1/2 " src="{{ asset('/image/login-illustration.png') }}">
        </div>
        <div class="slogan text-center text-white font-semibold text-2xl">
            <p>"Improve Your Alpha"</p>
        </div>
    </div>
</div>
@endsection
