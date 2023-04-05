

@extends('layouts.auth')

@section('title', 'register')

@section('content')
{{-- <div class="col-md-4 mx-auto my-5">
    <div class="card">
        <div class="card-body"> --}}
            <form action="{{ route("do.register") }}" method="POST">
                    @csrf
                    <div class="wrapper">
                        <div class="logo">
                            <img src="template/dist/img/heru.png" alt="">
                        </div>
                        <div class="text-center my-4 name">
                            Heru Shop
                        </div>

                        @error('name')
                            <div id="nameHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    <div class="form-field d-flex align-items-center">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp" placeholder="name">
                    </div>

                    @error('email')
                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                    @enderror
                    <div class="form-field d-flex align-items-center">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="email">
                    </div>

                    @error('password')
                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                    <div class="form-field d-flex align-items-center">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password">
                    </div>

                    @error('password_confirmation')
                            <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    <div class="form-field d-flex align-items-center">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                    </div>
                    <button type="submit" class="btn mt-3"><strong> Register </strong></button>
                 <div class="text-center fs-6 my-3">
                    <a>Sudah punya akun? Silahkan </a> <a href="{{ route('login') }}">login</a>
                 </div>
            </form>
        {{-- </div>
    </div>
</div> --}}

@endsection
