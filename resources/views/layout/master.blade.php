<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Weather Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset("assets/clients/img/weather-icon.png")}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/custom.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
{{--<div class="loader"></div>--}}
<nav class="px-lg-5 py-3 navbar navbar-light text-white bg-primary mb-4">
    <div>
        <a class="navbar-brand text-white">Weather Dashboard</a>
        <a class="text-white nav-link d-inline px-3" href="/">Home</a>
        <a class="text-white nav-link d-inline px-3" href="/history">History</a>
    </div>
    <form class="w-40">
        <input class="form-control mr-sm-2 w-60 d-inline" type="email" placeholder="Enter your email ..." aria-label="email">
        <button class="btn text-white btn-outline-success my-2 my-sm-0" type="submit">Subscribe</button>
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">unsubscribe</button>
    </form>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="col-4">
                @section('sidebar')
                    @include('blocks.sidebar')
                @show
            </div>

            <div class="col-8">
                @yield('weather-watch')
                @yield('4-day-forecast')
            </div>
        </div>
    </div>
</main>
<script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/clients/js/custom.js')}}"></script>
</body>
</html>
