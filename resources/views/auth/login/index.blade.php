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
            <div class="py-6 px-4 flex flex-col gap-y-12 justify-items-center h-fit w-screen md:w-full">
                <div class="title flex flex-col gap-y-2 w-full">
                    <div class="h1-bigtitle flex flex-col font-bold text-2xl md:text-3xl text-gray gap-y-1">
                        <h1 class="font-sans">Selamat Pagi!</h1>
                        <h1 class="">Masuk ke siAbsen</h1>
                    </div>
                    <p class="sm:text-sm text-md font-medium text-left text-gray opacity-80 max-w-sm">Pelaporan juga pengelolaan data
                        akademik
                        dan data lainnya
                    </p>
                </div>

                <form class="w-full" method="post" action="/login">
                    @csrf
                    <div class="mb-3 max-sm:max-w-md md:max-w-lg pr-5 md:pr-0">
                        <label for="email" class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input name="email" type="email"
                            class="input input-md w-full bg-backgroundColour  border-none @error('email') is-invalid @enderror"
                            id="email" placeholder="Email" autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 max-sm:max-w-md md:max-w-lg pr-5 md:pr-0">
                        <label for="password" class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name="password" type="password"
                            class="input input-md w-full bg-backgroundColour  border-none @error('password') is-invalid @enderror"
                            id="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-6 max-sm:max-w-md md:max-w-lg pr-5 md:pr-0">
                        <button
                            class="btn btn-block block bg-gradient-to-r rounded-lg from-lightPurple to-purpleDark text-white"
                            type="submit">Masuk</button>
                        <small class="text-center text-gray mt-3 font-medium flex justify-center">
                            <span>Tidak bisa masuk?</span>
                             <a href="/register" class="text-fontColor mx-1">Hubungi kami</a>
                        </small>
                    </div>
                </form>

                <div class="credits font-sans w-full h-fit absolute bottom-0 text-gray">
                    <p class="flex bottom-12 gap-x-2 absolute justify-center font-semibold text-xs items-center text-center mx-auto">
                        <span>
                            Desain ilustrasi oleh
                        </span>
                        <img class="w-16" src="{{ asset('/image/credit-freepik.png') }}">
                    </p>
                </div>
            </div>
        </div>
        <div
            class="illustration-section hidden md:flex md:flex-col h-full right-0 w-full bg-gradient-to-r from-lightPurple to-purpleDark">
            <div class="siabsen text-end m-8 text-white font-semibold text-2xl">
                <h1>siAbsen</h1>
            </div>
            <div class="image grid place-items-center">
                <img class="w-3/4 lg:w-4/6 " src="{{ asset('/image/login-illustration.png') }}">
            </div>
            <div class="slogan text-center text-white font-semibold text-2xl">
                <p class="italic">" Improve Your Alpha "</p>
            </div>
        </div>
    </div>
@endsection
