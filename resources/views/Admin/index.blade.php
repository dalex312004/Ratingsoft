@extends('adminlte::page')

@section('title', 'Administrador')

@section('content')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <header class="header linear-white">
        <div class="container vh-50">

            <div class="row  h-100 align-items-center">
                <div class="col-10 col-lg-8 text-white">
                    <h2 class="text-center"> Hola {{ Auth::user()->name }}, Te damos la Bienvenida a </h2>
                    <h1 class="text-capitalize">
                        <span class="text-info h5">RATINGSOFT</span><br />
                    </h1>
                    <div class="container">
                        <div class="row">
                                <img src="./img/Logo.png" alt="logo" style="width: 180px; height: 180px;">
                        </div>
                        <p>“INSPIRADOS POR LA EXELENCIA”</p>
                    </div>
                    <p class="d-none d-md-block">Queremos contribuir en el proceso del manejo de calificaciones de una
                        institución educativa,
                        mediante un sistema de información que permite el manejo y almacenamiento de calificaciones
                        de los estudiantes de una forma digital; tanto el estudiante como acudiente puede visualizar el
                        rendimiento académico.</p>
                </div>
            </div> 
        </div>
        <img src="./img/cuts/cut-header.svg" alt="">

    </header>
    <section class="container">

        <div class="row justify-content-md-center">

            <div class="col-12 text-center">
                <h1 class="text-capitalize">
                    <span class="text-info h3">RATINGSOFT</span><br />
                </h1>
                <h3 class="text-capitalize">Sistematización de notas </h3>
                <p class="text-muted">Este sistema de información ayudara en el proceso de manejo de calificaciones de
                    estudiantes
                    de una institución educativa mediante su sistematización.

                </p>
            </div>
            <article class="col-md-6 col-lg-4 card-effect mb-3 mb-md-0">
                <div class="card">
                    <img src="img/home5.jpg" alt="img1" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <p class="card-text">Diseñamos una interfaz intuitiva y amigable que permita a los profesores
                            ingresar y actualizar
                            las calificaciones de los alumnos de forma sencilla.</p>
                    </div>
                </div>
            </article>

            <article class="col-md-6 col-lg-4 card-effect  mb-3 mb-md-0">
                <div class="card">
                    <img src="img/home2.jpg" alt="img1" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <p class="card-text">Servicio de hosting seguro y confiable que garantice la protección de los
                            datos
                            académicos de los estudiantes y evite posibles brechas de seguridad.</p>
                    </div>
                </div>
            </article>

            <article class="col-md-6 col-lg-4 card-effect mt-md-4 mt-lg-0">
                <div class="card">
                    <img src="img/home3.jpg" alt="img1" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <p class="card-text">Desarrollamos un sistema de análisis y generación de reportes que
                            proporcione a los docentes
                            y directivos información detallada sobre el desempeño académico de los alumnos.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="container text-center">
        <div class="row">
            <div class="col-12">
                <h3 class="text-capitalize">
                    <span class="text-info h5">El principal beneficiario de RATINGSOFT son las instituciones
                        educativas que lo implementen.</span><br />
                </h3>
                <h2 class="text-capitalize h4">El objetivo es optimizar los procesos en tiempo y recursos. </h2>
                <ul class="col-12 col-md-6 mt-3">
                    <li class="media">
                        <i class="fas fa-user-tie fa-3x mr-3"></i> 
                        <div class="media-body">
                            <h4 class="h5">
                                <a href="#">Administrativo:</a>
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
                                <a href="#">Personal docente:</a>
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
                                <a href="#">Usuarios</a>
                            </h4>
                            <p>Visualizar informes académicos por alumno.</p>
                            <p>Consultar calificaciones.</p>
                        </div>
                    </li>
                </ul>
    </section>
    <section class="carousel slide" id="carousel-weston">
        <div class="carousel-caption carousel-weston-middle">
            <h2 class="d-none d-md-block text-uppercase">RATINGSOFT</h2>
            <p class="d-none d-md-block">SISTEMATIZAMOS PARA AYUDARTE</p>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/carousel/fother.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/carousel/2.jpg" class="d-block w-100" alt="...">
            </div>
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
    <section class="section container p-5">

        <div class="div row">
            <div class="col-12 text-center">
                <span class="text-info h5">RATINGSOFT</span><br />
                <h2 class="text-capitalize h3">"Inspirados por la excelencia"</h2>
            </div>
        </div>

    </section>
</body>
@stop
