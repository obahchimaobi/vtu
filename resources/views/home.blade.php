<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasyPayHub - @yield('title', 'One-Stop Solution for All Your Top-Ups')</title>

    {{-- BOOTSTRAP CDN --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    {{-- FONT AWESOME CDN --}}
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css') }}" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/style.css') }}">
</head>

<body class="mb-5">

    <nav class="navbar navbar-expand-sm z-3 position-fixed w-100 pt-3 pb-4" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%);">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="{{ route('home') }}" style="background: linear-gradient(135deg, #FF7E5F, #FEB47B); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">EasyPayHub</a>

            <button class="navbar-toggler d-lg-none rounded-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>

            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link me-3 text-light mt-3 mt-xl-0" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 text-light mt-3 mt-xl-0" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 text-light mt-3 mt-xl-0" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="text-light btn btn-dark rounded-pill btn-lg ps-3 pe-3 mt-3 mt-xl-0" style="font-size: 14px;">My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    {{-- BANNER --}}
    <div style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%);">
        <br><br><br><br><br>
        <div class="container mt-5">
            <div class="row d-flex align-items-center text-center text-xl-start">
                <div class="col-xl-6">
                    <h1 style="font-family: 'Roboto', sans-serif; font-weight: 700;" class="text-light">Welcome To Sitename</h1>
    
                    <p style="font-size: 15px;" class="text-light">Nigeria's topmost enterprise solution to your telecom needs.
                        Airtime, DATA, Cable Subscription (DSTV, GOTV, Startime), etc.</p>
    
                    <div class="mt-3">
                        <a href="" class="btn btn-dark rounded-pill me-1 ps-3 pe-3 btn-lg" style="font-size: 15px;">Register</a>
                        <a href="" class="btn btn-dark rounded-pill me-3 ps-4 pe-4 btn-lg" style="font-size: 15px;">Login</a>
                    </div>
                </div>
    
                <div class="col-xl-6">
                    <img src="{{ asset('assets/images/slider.png') }}" alt="" class="w-100 img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div>
        <br><br>
        <div class="container mt-5">
            <div class="text-center">
                <h3 style="font-family: 'Roboto', sans-serif; font-weight: 400">Virtual Top Up</h3>
                <h6 style="font-weight: normal;">Electronic vending of Airtime and data</h6>
            </div>

            <div class="rounded m-auto mt-3" style="height: 2px; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%); width: 50px;"></div>
        </div>
    </div>


    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/jquery-3.7.1.min.js') }}"></script>
</body>

</html>
