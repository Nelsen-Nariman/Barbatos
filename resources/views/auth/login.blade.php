@extends('template.layout')

@section('title')
    Login
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

{{-- Body --}}
@section('content')
    <div class="d-flex flex-column align-items-center mt-4">
        <p id="title" class="fs-1 fw-bold">Login</p>
        {{-- Ke Controller --}}
        <form method="POST" action="loginAction" class="d-flex flex-column align-items-center">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="emailInput" placeholder="Enter Your Email" type="email" class="form-control" value="{{ Cookie::get('CookieEmail') !== null ? Cookie::get('CookieEmail') : "" }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="passwordInput" placeholder="Enter Your Password" type="password" class="form-control" value="{{ Cookie::get('CookiePassword') !== null ? Cookie::get('CookiePassword') : "" }}" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <input name="rememberInput" type="checkbox" id="rememberMe">
                    <label for="rememberMe" class="form-label">Remember Me</label>
                </div>

                @if ($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-dark mt-4">Login</button>
                </div>
                <div class="register-ask">
                    <p class="fs-6 fw-light">Don't have an account?</p>
                    <a href="{{ route('auth.register') }}">Register Here</a>
                </div>
        </form>
    </div>
@endsection