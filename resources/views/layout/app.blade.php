<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Website CSS -->
    <link rel="stylesheet" href="{{ asset('website-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/style.css') }}">

    <!-- Font Awesome CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css"
        integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >

</head>

<body>

    @include('comman.navbar')

    <main>
        @yield('content')
    </main>

    @include('comman.footer')


    <!-- Website JavaScript -->
    <script src="{{ asset('website-assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('website-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website-assets/js/aos.js') }}"></script>
    <script src="{{ asset('website-assets/js/chart.umd.min.js') }}"></script>
    <script src="{{ asset('website-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website-assets/js/main.js') }}"></script>

</body>

</html>