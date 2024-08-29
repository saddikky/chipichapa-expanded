@extends(auth()->check() ? 'layout' : 'guest-layout')


@section('content')

    

    <div class="big-rounded-container mt-3 mb-3">
        <h1>Unlock Exclusive Benefits Today!</h1>
        <p>
        Join the PT ChipiChapa community and gain access to a <b>world of innovation, support, and resources</b> designed to elevate your business. As a member, you’ll receive tailored IT solutions, priority access to our latest services, and expert guidance <b>to help you stay ahead in the digital landscape.</b>
        </p>    
    </div>

    <div class="big-rounded-container mb-3">
        <h1>
            Why Register?
        </h1>
        <p>
            <b>Tailored IT Solutions</b>: Enjoy personalized recommendations and services that align with your specific business needs.<br>
            <b>Priority Support</b>: Get fast-tracked assistance from our team of experts, ensuring your systems run smoothly without interruption. <br>
            <b>Exclusive Resources</b>: Access members-only content, including webinars, whitepapers, and case studies that provide deep insights into the latest industry trends. <br>
            <b>Special Offers</b>: Receive early notifications about new services, discounts, and special promotions available only to registered users.
        </p>
    </div>
    
    <div class="big-rounded-container mt-3 mb-3">
        <h1>Join the Community of Innovators</h1>
        <p>
        At PT ChipiChapa, we believe in empowering businesses to achieve their full potential. By registering, you become part of a forward-thinking community that’s committed to driving technological excellence.
        </p>    
    </div>

    <div class="small-rounded-container">
        <b>
        <text>Ready to transfer your bussiness?</text><br>
        <a href="{{ route('login')}}" class="btn btn-custom-darkpurple btn-home">Login</a> <text>or</text>
        <a href="{{ route('registration')}}" class="btn btn-custom-darkpurple btn-home">Register</a><br>
        <text>now and start your journey with PT ChipiChapa.</text>
        </b>
    </div>

    <h3 class="text-center mt-3 mb-3">
            <em>
                ChipiChapa, your number one IT solution.
            </em>
    </h3>

@endsection




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChipiChapa LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} " class="rel">
</head>
<body>
    NAVBAR 10.29
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <h1>
                PT Chipi Chapa
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=#">Home</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=#>About Us</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href=#>Employee</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">Edit Employee</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Login</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
            </ul>
            </li>

        </ul>
        </div>
    </div>
    </nav>
    END NAVBAR

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> -->