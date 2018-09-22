<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NTRS-@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        @yield('css')
    </head>
    <body>
    <div id="app">
        @yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @yield('js')
    </body>
</html>
