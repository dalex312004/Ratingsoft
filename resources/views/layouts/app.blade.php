<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RATINGSOFT') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="/img/Logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS Main -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <a class="navbar-brand text-info" href="{{ url('home') }}">
                <img src="./img/descarga.png" alt="" width="50%" height="50%">
            </a>

            <a class="navbar-brand text-info" href="{{ url('') }}">
                {{ config('app.name', 'RATINGSOFT') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto menu">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">{{ __('Misión') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">{{ __('Visión') }}</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white"
                            href="">{{ __('Sobre Nosotros') }}</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white"
                            href="">{{ __('Saber más!') }}</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <button id="logboton" type="submit" class="btn btn-outline-primary mb-4 button_color">
                                <a class="nav-link text-white"
                                    href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </button>
                        @endif
                        {{-- @if (Route::has('register'))
                            <button id="registro" type="submit" class="btn btn-outline-primary mb-4 button_color">
                                <a class="nav-link text-white"
                                    href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </button>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('storage/Avatar/'). Auth::user()->Avatar }}"
                                    style="width: 40px; height:40px; float: left; border-radius:50px; margin-right:25px">
                            </a>
                            <p class="text-block" style="color:black"> {{ Auth::user()->name }}</p>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('ActualizarPerfil') }}">
                                    {{ __('Tu Perfil') }}
                                </a>
                                {{-- @can('admin.index') --}}
                                    <a class="dropdown-item" href="{{route('Administrador')}}" class="block px-4 py-2 text-sm" >
                                        {{ __('Administrador') }}
                                    </a>
                                {{-- @endcan --}}
                                <a class="dropdown-item fas fa-fw fa-hotel" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="text-center text-lg-start text-muted color-fondo p-2">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <div>
                    <span style="font-size: 34px;"><i class="fas fa-icons"></i></span>
                    <span style="font-size: 24px; color:white">Nuestras redes sociales</span>
                </div>
            </div>

            <div style="font-size: 34px;">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="/public/img/Logo.png" alt="" class="me-3">RATINGSOFT
                        </h6>
                        <p>
                            "RATINGSOFT es la solución definitiva para simplificar y mejorar la gestión de calificaciones en su institución educativa. Este software ha sido diseñado pensando en docentes, estudiantes y padres por igual. Con RATINGSOFT, los docentes pueden registrar y actualizar fácilmente las calificaciones de sus alumnos
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Tecnologías
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Java-script</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">PHP</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">HTML:5 y CSS:3</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                        <h6 class="text-uppercase fw-bold mb-4 ">
                            Creadores
                        </h6>
                        <p>
                            <a href="https://github.com/OrozcoDev" class="text-reset">Juan Orozco</a>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/andresfelipe.suaza.7/" class="text-reset">Andres Suaza</a>
                        </p>
                        <p>
                            <a href="" class="text-reset">Evelyn Meneses</a>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/profile.php?id=100083360104661" class="text-reset">Alexander Gómez</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="font-size: 20px;">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contactos
                        </h6>
                        <p><i class="fas fa-home me-3"></i>CL 19 N #3-27</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            ratingsoft@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 57 318 746 81 60</p>
                        <p><i class="fas fa-print me-3"></i> + 57 312 624 26 64</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © {{ date('Y') }} {{ config('app.name', 'RATINGSOFT') }}. All Rights Reserved.
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ratingsoft@gmail.com</a>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')
</body>

</html>
