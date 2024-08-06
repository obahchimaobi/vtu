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

<body>

    <nav class="navbar navbar-expand-sm z-3 position-fixed w-100" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%);">
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
                        <a class="nav-link me-3 text-light" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 text-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 text-light" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link me-2 me-3 text-light">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link me-2 me-3 text-light">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br><br><br><br>
    {{-- BANNER --}}
    <div class="container mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-xl-6">
                <h1 style="font-family: 'Roboto', sans-serif; font-weight: 700;" class=" text-center text-xl-start">Welcome To Sitename</h1>
            </div>

            <div class="col-xl-6">
                <img src="{{ asset('assets/images/slider.png') }}" alt="" class="w-100 img-fluid">
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/jquery-3.7.1.min.js') }}"></script>
</body>

</html>
