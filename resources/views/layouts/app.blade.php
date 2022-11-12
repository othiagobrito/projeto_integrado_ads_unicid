<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        @yield('styles')
    </head>

    <body>
        @if (request()->route()->getName() !== 'login.index')
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <nav class="navbar navbar-expand-lg fixed-top theme-color-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">PONTO ESTÉTICA</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Agenda</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Redes Sociais</a>
                                </li>
                            </u>
                        </div>
                    </div>
                </nav>
            </header>
        @endif

        @yield('content')

        <footer class="bg-light small text-center text-lg-start fixed-bottom">
            <div class="text-center p-0 theme-color-light">
                <span class="text-dark"><strong>Ponto Estética</strong></span>
                <div>
                    &copy; {{ now()->year }}
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>