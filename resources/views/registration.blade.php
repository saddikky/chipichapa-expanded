@extends('guest-layout')


@section('content')

    <div class="text-center mt-3">
    <h2>Register to the Website</h2>
    <p>Fill in the form to create an account</p>

    <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('registration.submit') }}" method="post">
                            @csrf
                            <label class="mb-2">Username</label>
                            <input type="text" name="name" placeholder="unique username, 8-30" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="class text-danger mb-1">Invalid Name</div>
                            @enderror

                            <label class="mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="valid email address" class="form-control mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="class text-danger mb-1">Invalid Email</div>
                            @enderror

                            <label class="mb-2">Password</label>
                            <input type="password" name="password" placeholder="8 characters min" class="form-control mb-2 @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="class text-danger mb-1">Invalid Password</div>
                            @enderror

                            <label class="mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="confirm password" class="form-control mb-2 @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="class text-danger mb-1">Invalid Password</div>
                            @enderror

                            <button class="btn btn-custom-darkpurple mt-2">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Registration</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    
<div class="text-center mt-5">
    <h2>Register to the Website</h2>
    <p>Fill in the form to create an account</p>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('registration.submit') }}" method="post">
                        @csrf
                        <label class="mb-2">Full Name</label>
                        <input type="text" name="name" class="form-control mb-2">

                        <label class="mb-2">Email Address</label>
                        <input type="text" name="email" class="form-control mb-2">

                        <label class="mb-2">Password</label>
                        <input type="password" name="password" class="form-control mb-2">
                        <button class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> -->