@extends('layouts.app')

@section('content')
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
</div><!-- /.container -->
@endsection