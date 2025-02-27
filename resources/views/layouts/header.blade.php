<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name','Laravel') }}</title> --}}

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->


    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- styles tw --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/header.css') }}"> --}}
    <link rel="stylesheet" href="css/header.css">
    <script src="{{ asset('js/app.js') }}"></script>



</head>

<body class="font-sans antialiased">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main>
        </div> --}}

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            {{-- <a href="/HTML/menu.html" style="margin-left: 1%; margin-right:1%">
                <i class="fa-solid fa-arrow-left" style="margin-left: 5%; color:white"></i>
            </a> --}}
            
            <div class="container-fluid">
                <a class="navbar-brand" href="main">
                    Biovic
                    <img src="IMG/CutPaste_2024-08-02_10-48-31-556.png" alt="Logo de VitalSoft" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style=" --bs-scroll-height: 100px; margin-left: 5%; margin-right:5%">
                        {{-- <li ><a class="nav-link " aria-current="page" href="menu">Home</a></li> --}}
                        <li><a class="nav-link"   href="hojas_vida">Hojas de Vida</a></li>
                        <li><a class=" nav-link"  href="mantenimiento">Gestión de Mantenimiento</a></li>
                        <li><a class=" nav-link "  href="soporte">Soporte Técnico</a></li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <hr class="dropdown-divider">

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link disabled nav-link active" aria-disabled="true">Menú Principal</a>
                        </li> --}}
                    </ul>
                    <ul>
                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <button class="button"><a class="nav-link"
                                            href="{{ route('login') }}">{{ __('Ingresar') }}</a></button>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <button class="button">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </button>
                        </li>
                    @endif --}}
                        @else
                            {{-- despliegue --}}
                            {{-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> --}}
                            <ul class="nav-item dropdown">
                                <a id="navbarDropdown"
                                    style=" justify-content: center; align-content:center; padding-right:2rem; "
                                    class="nav-link dropdown-toggle button" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="profile" class="bi bi-person-circle bi bi bi bi dropdown-item "> Perfil</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Mi Perfil</a>
                                    <a class="dropdown-item" href="#">Notificaciones</a>
                                    <a class="dropdown-item" href="#">Favoritos</a>
                                    <a class="dropdown-item" href="/HTML/soporte.html">Configuración</a>
                                    {{-- <a class="dropdown-item" href="{{froute('fav.show')}}">favoritoa</a> --}}

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Configuraciones de Cuenta</a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf</form>
                            </ul>
                    </div>


                @endguest
            </div>
            </ul>
            {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="button"
                            onclick="window.location.href='https://www.google.com'">Search</button>
                    </form> --}}
            </div>
            </div>

        </nav>
    </header>









</body>

</html>
