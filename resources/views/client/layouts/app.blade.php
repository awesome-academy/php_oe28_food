<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images\favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/my-account.css') }}">

    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/slick/examples/css/style.css') }}">

    <title>@yield('title')</title>
</head>

<body>

    <div id="preloader">
        <div id="status"></div>
    </div>

    @include('client.layouts.header')

    @yield('content')

    @include('client.layouts.footer')

    <script src="{{ asset('bower_components/jQuery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/slick/dist/slick.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/custome.js') }}"></script>
    <script src="{{ mix('/js/all.js') }}"></script>

</body>

</html>
