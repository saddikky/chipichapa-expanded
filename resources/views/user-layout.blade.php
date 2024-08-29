<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipiChapa LTD</title>
    <link rel="icon" href="https://res.cloudinary.com/dtlclpijx/image/upload/v1724846225/tamnel_dam7ds.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} " class="rel">
</head>
<body>
<div class="d-flex flex-column min-vh-100">
    <!-- NAVBAR 10.33-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('landing') }}">
        <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724842978/image-removebg-preview_1_hjlldv.png" alt="Logo" class="nabar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto navbar-nav-right">
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('landing') }}">Home</a>
            </li> -->

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About Us</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{ route('appt.list') }}">Appointments</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->    

    <!-- <h1 class="text-center mt-3">Employee Database</h1> -->

    <!-- @if(Auth::check())
    <div class="text-center">
        <b>Hello, {{ Auth::user()->name }}</b>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger mt-2">Logout</button>
        </form>
    </div>
    @endif -->

    <div class="mt-3 container">
        @yield('content')
    </div>

    <footer class="user-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} PT ChipiChapa. All rights reserved.</p>
            <p>
                Privacy Policy |
                Terms of Service
            </p>
        </div>
    </footer>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>