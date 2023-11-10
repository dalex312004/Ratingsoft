@extends('layouts.app')
@section('template_welcome')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>RATINGSOFT</title>
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <!-- CDN Font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <!-- CSS Main -->
        <link rel="stylesheet" href="./css/main.css" />
    </head>

    <body>

        <!--header -->
        <header class="header linear-white">
            <div class="container vh-50">

                <!-- navbar -->


                <!-- descripcion -->
                <div class="row  h-100 align-items-center">
                    <div class="col-10 col-lg-6 text-white">
                        <!-- title -->
                        <h1 class="text-capitalize">

                            <span class="text-info h5">RATING</span><br />SOFT
                        </h1>

                        <!-- descripcion -->
                        <p class="d-none d-md-block">Contribuir en el proceso del manejo de calificaciones de una
                            institución educativa,
                            mediante un sistema de información que permite el manejo y almacenamiento de calificaciones
                            de los estudiantes de una forma digital; tanto el estudiante como acudiente puede visualizar el
                            rendimiento académico.</p>
                        <!--boton -->
                        <a href="http://127.0.0.1:8000/login" class="text-reset btn btn-info">Acceder</a>
                    </div>


                </div>
                {{-- <h2 class="text-center"> Hola {{ Auth::user()->name }}, Empieza tu avenetura en </h2>  --}}

            </div>
            <!-- separador  con imagen -->
            <img src="./img/cuts/cut-header.svg" alt="">

        </header>


        <!--  text-cualquiera -experience -->

        <section class="container">

            <div class="row justify-content-md-center">

                <div class="col-12 text-center">
                    <h2 class="text-danger text-uppercase">RATINGSOFT</h2>
                    <h3 class="text-capitalize">Sistematización de notas </h3>
                    <p class="text-muted">Este sistema de información ayudara en el proceso de manejo de calificaciones de
                        estudiantes
                        de una institución educativa mediante su sistematización.

                    </p>
                </div>
                <!-- card -->
                <!-- card #1 -->
                <article class="col-md-6 col-lg-4 card-effect mb-3 mb-md-0">
                    <div class="card">
                        <img src="img/home5.jpg" alt="torre" class="card-img  card-img-filter " />
                        <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                            <h4 class="card-title">RATINGSOFT</h4>
                            <p class="card-text">Diseñamos una interfaz intuitiva y amigable que permita a los profesores
                                ingresar y actualizar
                                las calificaciones de los alumnos de forma sencilla.</p>
                            <a href="#" class="text-reset">Sistematiza!</a>
                        </div>
                    </div>
                </article>

                <!-- card #2 -->
                <article class="col-md-6 col-lg-4 card-effect  mb-3 mb-md-0">
                    <div class="card">
                        <img src="img/home2.jpg" alt="iglesia" class="card-img  card-img-filter " />
                        <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                            <h4 class="card-title">RATINGSOFT</h4>
                            <p class="card-text">Servicio de hosting seguro y confiable que garantice la protección de los
                                datos
                                académicos de los estudiantes y evite posibles brechas de seguridad.</p>
                            <a href="#" class="text-reset">-</a>
                        </div>
                    </div>
                </article>

                <!-- card #3-->
                <article class="col-md-6 col-lg-4 card-effect mt-md-4 mt-lg-0">
                    <div class="card">
                        <img src="img/home3.jpg" alt="iglesia2" class="card-img  card-img-filter " />
                        <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                            <h4 class="card-title">RATINGSOFT</h4>
                            <p class="card-text">Desarrollamos un sistema de análisis y generación de reportes que
                                proporcione a los docentes
                                y directivos información detallada sobre el desempeño académico de los alumnos.</p>
                            <a href="#" class="text-reset">---</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!--  para lso comentiarios  -->

        <section class="comments linear-white mb-5">
            <!--  imagen para separar las dos partes siempre fuera del container   -->
            <img src="./img/cuts/cut-header.svg" alt="" class="transform-turn">

            <div class="container">
                <div class="row">
                    <blockquote class="col-12  text-white text-center">

                        <!-- img de la persona  -->
                        <img src="./img/Logo.png" alt="" class="commets__img" style="width: 180px; height: 180px;">

                        <!-- comentiario de la persona -->
                        <p class="d-none d-md-block">“SOFTWARE DE CALIFICACIONES”</p>
                        <!-- name  -->
                        <footer class="blockquote-footer  text-white">

                            <cite>RATINGSOFT</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>
        <!--  no se que poner a qui "inspiration" -->

        <section class="container">
            <div class="row">
                <!--  titulo" -->
                <div class="col-12 text-center">
                    <h3 class="text-danger text-uppercase h6">El principal beneficiario de RATINGSOFT son las instituciones
                        educativas que lo implementen.</h3>
                    <h2 class="text-capitalize">El objetivo es optimizar los procesos en tiempo y recursos. </h2>
                    <!--  media objeto 1 -->
                    <ul class="col-12 col-md-6 mt-3">
                        <li class="media">
                            <i class="fas fa-user-tie fa-3x mr-3"></i> <!-- Icono grande -->
                            <div class="media-body">
                                <h4 class="h5">
                                    <a href="">Administrativo:</a>
                                </h4>
                                <p>Conceder permisos a usuarios y docentes</p>
                                <p>Registrar cada alumno en su grado respectivo.</p>
                                <p>Dar de baja a personal docente.</p>
                                <p>Consultar personal docente.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-chalkboard-teacher fa-3x mr-3"></i> <!-- Icono grande -->
                            <div class="media-body">
                                <h4 class="h5">
                                    <a href="">Personal docente:</a>
                                </h4>
                                <p>Subir calificaciones.</p>
                                <p>Modificar calificaciones (solicitando permisos a administrador).</p>
                                <p>Consultar lista de grados y alumnos.</p>
                                <p>Subir reportes académicos.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-users fa-3x mr-3"></i> <!-- Icono grande -->
                            <div class="media-body">
                                <h4 class="h5">
                                    <a href="">Usuarios</a>
                                </h4>
                                <p>Visualizar informes académicos por alumno.</p>
                                <p>Consultar calificaciones.</p>
                            </div>
                        </li>
                    </ul>
        </section>

        <!-- carousel  -->
        <section class="carousel slide" id="carousel-weston">
            <div class="carousel-caption carousel-weston-middle">
                <!-- algun titulo de acuerdo a las imagnes o al tema   -->
                <h2 class="d-none d-md-block text-uppercase">RATINGSOFT</h2>
                <p class="d-none d-md-block">SISTEMATIZAMOS PARA AYUDARTE</p>
            </div>
            <div class="carousel-inner">
                <!-- carousel#1  -->
                <div class="carousel-item active">
                    <img src="./img/carousel/fother.webp" class="d-block w-100" alt="...">
                </div>
                <!-- carousel#2  -->
                <div class="carousel-item">
                    <img src="./img/carousel/2.jpg" class="d-block w-100" alt="...">
                </div>
                <!-- carousel#3  -->
                <div class="carousel-item">
                    <img src="./img/carousel/3.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a href="#carousel-weston" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel-weston" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </section>

        <!-- features  -->
        <section class="section container p-5">

            <div class="div row">
                <!-- title  -->
                <div class="col-12 text-center">
                    <h3 class="text-danger text-uppercase h6">RATINGSOFT</h3>
                    <h2 class="text-capitalize">"Inspirados por la excelencia"</h2>
                </div>
                <!-- agregar algo de ultimo  -->
            </div>

        </section>


        <!-- PIE de paginaaaa  "footer"-->




        <!-- Jquery -->
        <script src="./js/jquery-3.5.0.min.js"></script>
        <!-- Popper -->
        <script src="./js/popper.min.js"></script>
        <!-- JS Bootstrap -->
        <script src="./js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
