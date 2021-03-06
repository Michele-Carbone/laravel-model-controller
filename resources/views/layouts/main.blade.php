<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'myMovies')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    {{-- CDNS--}}
    @yield('cdns')
</head>
<body>
    {{-- header--}}
    @include('includes.header')

    <main>
        @yield('content')
    </main>

    {{-- SCRIPTS --}}
    <script src="{{ asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>