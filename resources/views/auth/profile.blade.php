@extends('template.layout')

@section('title')
    My Profile
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/general-style.css') }}">
@endsection

{{-- Body --}}
@section('content')
<div class="d-flex flex-column align-items-center mt-2">
    <p id="title" class="fs-1 fw-bold">My Profile</p>

    <div class="mb-3 w-100">
        <label for="exampleInputName" class="form-label">Name</label>
        <input name="nameInput" type="text" class="form-control" value="{{ $name }}" disabled>
    </div>
    <div class="mb-3 w-100">
        <label for="exampleInputEmail" class="form-label">Email</label>
        <input name="emailInput" type="email" class="form-control" value="{{ $email }}" disabled>
    </div>
    <div class="mb-3 w-100">
        <label for="exampleInputGender" class="form-label">Gender</label>
        <input name="genderInput" type="text" class="form-control" id="exampleInputGender" value="{{ $gender }}" disabled>
    </div>
    <div class="mb-3 w-100">
        <label for="exampleInputDOB" class="form-label">Date of Birth</label>
        <input name="DOBInput" type="text" class="form-control" id="exampleInputDOB" value="{{ $dob }}" disabled>
    </div>
    <div class="mb-3 w-100">
        <label for="exampleInputCountry" class="form-label">Country</label>
        <input name="countryInput" type="text" class="form-control" id="exampleInputCountry" value="{{ $country }}" disabled>
    </div>
</div>
@endsection