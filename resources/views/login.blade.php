@extends('guest-layout')


@section('content')

        <div class="text-center mt-3">
            <h2>Login to the Website</h2>
            <p>Fill in credentials to log in</p>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-start">
                            @if(session('failed'))
                            <p class="text-danger">{{ session('failed') }}</p>
                            @endif
                            <form action="{{ route('login.submit') }}" method="post">
                                @csrf
                                <label class="mb-2">Email Address</label>
                                <input type="text" name="email" class="form-control mb-2">

                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control mb-2">
                                <button class="btn btn-custom-darkpurple">Login</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection


<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ asset('css/style.css') }} " class="rel">
    </head>
    <body>

        <div class="text-center mt-5">
            <h2>Login to the Website</h2>
            <p>Fill in credentials to log in</p>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-start">
                            @if(session('failed'))
                            <p class="text-danger">{{ session('failed') }}</p>
                            @endif
                            <form action="{{ route('login.submit') }}" method="post">
                                @csrf
                                <label class="mb-2">Email Address</label>
                                <input type="text" name="email" class="form-control mb-2">

                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control mb-2">
                                <button class="btn btn-primary">Login</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> -->