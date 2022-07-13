<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <h3>Grupo 1</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('sugerencias') }}">Sugerencias</a>
                        </li>
                    </ul>
                    @guest
                        @if (!Route::is('login'))
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                        @endif

                        @if (Route::is('login'))
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @endif

                    @else
                        {{-- <a class="btn btn-sm btn-primary mx-2" href="{{ route('mensaje') }}">Notificaciones</a> --}}
                        <form action="{{ route('logout') }}" method="POST">
                            @method('POST')
                            @csrf
                            <button type="submit" value="Cerrar" class="btn btn-danger">Cerrar Sesión</button>
                        </form>
                        </a></p>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="container">
        <hr>
        <p class="float-end"><a href="#">Ir arriba</a></p>
        <p>&copy; Creado por el grupo 1 de desarrollo web &middot; 2022 </p>
    </footer>
    </div>
</body>

</html>
