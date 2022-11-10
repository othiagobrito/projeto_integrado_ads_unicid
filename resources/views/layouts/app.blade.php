<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
</head>
<body>
    <header></header>

    <main>
        @yield('content')
    </main>

    <footer></footer>
    
    @yield('scripts')
</body>
</html>