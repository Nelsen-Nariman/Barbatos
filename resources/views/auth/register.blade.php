@extends('template.layout')

@section('title')
    Register
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

{{-- Body --}}
@section('content')
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Register</p>
    {{-- Ke Controller --}}
    <form method="POST" action="registerAction" class="d-flex flex-column align-items-center">
        @csrf
            <div class="mb-3 w-100">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" placeholder="Enter Your Name" type="text" class="form-control" id="exampleInputEmail1" value="{{ old('name') }}">
            </div>

            <div class="mb-3 w-100">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" placeholder="Enter Your Email" type="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}">
            </div>

            <div class="mb-3 w-100">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" placeholder="Enter Your Password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3 w-100">
                <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                <input name="password_confirmation" placeholder="Re-type Your Password" type="password" class="form-control" id="exampleInputConfirmPassword1">
            </div>

            <div class="mb-3 w-100">
                <label for="radioGender" class="form-label">Gender</label>
                <div id="radioGender">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" @if (old('gender') == "Male")
                            {{ 'checked' }}
                        @endif>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" @if (old('gender') == "Female")
                        {{ 'checked' }}
                    @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Female
                        </label>
                      </div>
                </div>
            </div>

            <div class="mb-3 w-100">
                <label for="exampleInputDOB" class="form-label">Date of Birth</label>
                <input name="date_of_birth" type="date" class="form-control" id="exampleInputDOB" value="{{ old('date_of_birth') }}">
            </div>

            <div class="mb-3 w-100">
                <label for="exampleInputCountry" class="form-label">Country</label>
                <select name="country" id="country" class="form-select" aria-label="Default select example" id="exampleInputCountry">
                    <option selected disabled>Choose a country</option>
                    <option value="Argentina" @if (old('country') == "Argentina") {{ 'selected' }} @endif>Argentina</option>
                    <option value="France" @if (old('country') == "France") {{ 'selected' }} @endif>France</option>
                    <option value="Indonesia" @if (old('country') == "Indonesia") {{ 'selected' }} @endif>Indonesia</option>
                    <option value="Malaysia" @if (old('country') == "Malaysia") {{ 'selected' }} @endif>Malaysia</option>
                    <option value="Singapore" @if (old('country') == "Singapore") {{ 'selected' }} @endif>Singapore</option>
                </select>
            </div>
            
            @if ($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-outline-dark mt-4">Register</button>
            </div>
            <div class="register-ask">
                <p class="fs-6 fw-light">Already have an account?</p>
                <a href="{{ route('auth.login') }}">Login Now</a>
            </div>
    </form>
</div>
@endsection