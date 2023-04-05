

@extends('layouts.auth')

@section('title', 'login')

@section('content')
{{-- <div class="col-md-4 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route("do.login") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                    @error('email')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <p>
                    Belum punya akun?
                    <a href="{{ route('register') }}">silakan mendaftar.</a>
                </p>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div> --}}
<!-- Pills navs -->
<form action="{{ route("do.login") }}" method="POST">
    @csrf
        <div class="wrapper">
            <div class="logo">
                <img src="template/dist/img/heru.png" alt="">
            </div>
            <div class="text-center my-4">
                Heru Shop
            </div>
            <form class="p-3 mt-3">
                @error('email')
                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">
                </div>
                @error('password')
                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                 @enderror
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                </div>
                <button class="btn mt-3" type="submit"> <strong> Login </strong> </button>
            </form>
            <div class="text-center fs-6 my-3">
                <a>Tidak punya akun? Silahkan </a> <a href="{{ route('register') }}">registrasi</a>
            </div>
        </div>
    </form>
@endsection
