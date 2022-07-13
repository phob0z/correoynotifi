<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Notificaciones</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        span.carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000080' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }

        span.carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000080' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }

        p.justificado {
            text-align: justify;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h3>Grupo 1</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('sugerencias') }}">Sugerencias</a>
                        </li>
                    </ul>
                    @guest
                        <a class="btn btn-primary" href="{{ route('login') }}">Iniciar Sesión</a>
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

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1" style="background-color: #000080"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    style="background-color: #000080"></button>
                {{-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" height="350px" src="https://i.postimg.cc/L6ktCc5v/Banner-EPN.png"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-start text-dark">
                            <h1>
                                <p>Examen del 1er Bimestre</p>
                            </h1>
                            <p>Aprendiendo del Mundo Real</p>
                            {{-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" height="350px" src="https://i.postimg.cc/dVFttXq7/Banner-EPN2.png"
                        alt="">
                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <h2>Organización y trabajo en equipo</h2>
                            <h2>Funcionalidades del Product Owner</h2>
                            <h2>Heroku y AlwaysData</h2>
                            <h2>Configuración de SMTP para envío de correos</h2>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                {{-- <span class="visually-hidden">Previous</span> --}}
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                {{-- <span class="visually-hidden">Next</span> --}}
            </button>
        </div>

        <div class="container marketing mt-5">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle mx-auto d-block" height="180px"
                        src="https://avatars.githubusercontent.com/u/74626123?v=4" alt="">
                    <h2 align="center">Raúl Tenorio</h2>
                    <p class="justificado">
                        Nació en Quito-Ecuador el 9 de marzo de 2002. Realizó sus estudios secundarios en la
                        Institución Educativa Fiscal “Miguel de Santiago”. Actualmente, estudia en
                        la Escuela Politécnica Nacional la carrera de Tecnología Superior en Desarrollo de Software.
                    </p>
                    <p><a class="btn btn-secondary" href="https://github.com/raul-tenorio">Ver GitHub &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle mx-auto d-block" height="180px"
                        src="https://i.postimg.cc/NF6JBb7c/dustin.png" alt="">

                    <h2 align="center">Dastin Chávez</h2>
                    <p class="justificado">
                        Nació en Quito-Ecuador el 11 de junio de 2001. Realizó sus estudios secundarios en el Colegio
                        Técnico Salesiano Don Bosco de la Kennedy. En la actualidad realiza sus estudios en la Escuela
                        Politécnica Nacional en Tecnología Superior en Desarrollo de Software.
                    </p>
                    <p><a class="btn btn-secondary" href="https://github.com/phob0z">Ver GitHub &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle mx-auto d-block" height="180px"
                        src="https://avatars.githubusercontent.com/u/110379?v=4" alt="">

                    <h2 align="center">Leonel Molina</h2>
                    <p class="justificado">Nació en Mérida-Venezuela el 18 de junio de 1988. Realizó sus estudios
                        secundarios en el Colegio
                        San Martín de Porres. Actualmente se encuentra cursando estudios de Desarrollo de Software en la
                        Escuela Politécnica Nacional.
                    </p>
                    <p><a class="btn btn-secondary" href="https://github.com/phob0z">Ver GitHub &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle mx-auto d-block" height="180px"
                        src="https://avatars.githubusercontent.com/u/49448256?v=4" alt="">

                    <h2 align="center">Ariel Calderón</h2>
                    <p class="justificado">Nació en Quito-Ecuador el 26 de junio de 1998. Realizó sus estudios
                        secundarios en la unidad
                        educativa William Caxton. Actualmente realiza sus estudios en la Escuela Politécnica Nacional en
                        Tecnología Superior en Desarrollo de Software. Trabaja en la empresa Soft Warehouse como
                        desarrollador junior desde el 15 de marzo de 2022.
                    </p>
                    <p><a class="btn btn-secondary" href="https://github.com/ArielC98">Ver GitHub &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle mx-auto d-block" height="180px"
                        src="https://avatars.githubusercontent.com/u/74626067?v=4" alt="">

                    <h2 align="center">Jean Fuentes</h2>
                    <p class="justificado">Nació en Quito-Ecuador el 13 de marzo de 2002. Realizó sus estudios
                        secundarios en el Colegio
                        Técnico UNE, cursando la carrera técnica Electrónica de consumo. Actualmente realiza sus
                        estudios universitarios en la Escuela Politécnica Nacional en la carrera de Tecnología en
                        Desarrollo de Software.
                    </p>
                    <p><a class="btn btn-secondary" href="https://github.com/Jeanpy171">Ver GitHub &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
{{-- 
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                        exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                            yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                        of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                        really intended to be actually read, simply here to give you a better view of what this would
                        look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider"> --}}

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; Creado por el grupo 1 de desarrollo web &middot; 2022 </p>
        </footer>
    </main>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
