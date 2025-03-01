<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('client/bootstrap.min.css') }}">
    @yield('link')
</head>

<body>
    <header>
        @include('client._composants.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('client._composants.footer')
    </footer>
    <script src="{{ asset('client/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>

</html>
