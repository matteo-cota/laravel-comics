<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Comics Page')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('partials.header')

    <main class="container">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
