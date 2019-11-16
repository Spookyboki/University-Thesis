<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kolano - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>
<body>

    @if(session()->has('success'))
        <div class="alert-success">
            <strong>{{ session()->get('success') }}</strong>
        </div>
    @endif

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <!--build:js js/main.min.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- endbuild -->
</body>
</html>
