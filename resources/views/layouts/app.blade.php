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
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css') }}"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/style.css') }}">
</head>

<body class="mb-5 bg-light">

    @include('layouts._header')

    @yield('content')

    @include('layouts._footer')

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/jquery-3.7.1.min.js') }}"></script>
</body>

</html>