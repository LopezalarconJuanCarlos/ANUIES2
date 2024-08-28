<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>@yield('title') | ANUIES</title>
    @include('layout.head')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 center" style="margin-top: 2em;">
                <span class="nav-title"><img src="{{ asset('Logos/LogoBlanco_anuies.png') }}" alt="ANUIES" style="height: 70px;"></span>
                <span class="nav-title"><img src="{{ asset('Logos/LOGOANUIESTIC_1.png') }}" alt="ANUIES" style="height: 120px;"></span>
                <!-- <span class="nav-title"><img src="{{ asset('Logos/LOGOANUIESTIC_2.png') }}" alt="ANUIES" style="height: 100px;"></span> -->
                <span class="nav-title"><img src="{{ asset('Logos/LOGOANUIESTIC_3.png') }}" alt="ANUIES" style="height: 100px;"></span>
                <h4 style="font-style: italic; font-weight: bold; color: #841c24; margin-bottom: 0;"> RED DE SEGURIDAD DE CÓMPUTO</h4>
                <h5 style="font-style: italic; font-weight: bold; color: #841c24; margin-top: 0;">ANUIES/REGIÓN CENTRO SUR</h5>
            </div>
        </div>
    </div>
    <nav class="z-depth-5">
        <div class="nav-wrapper" style="background-color: #85344c;">
            <div class="container">
                <right><a id="logo-container" href="#" class="brand-logo"></a></right>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons white-text">menu</i>
                </a>
                <ul class="hide-on-med-and-down">
                    <li><a href="{{route('index')}}" class="dropdown-trigger" data-target="id_drop">Inicio</a></li>
                    <li><a href="{{route('index')}}#seccion1" class="dropdown-trigger" data-target="id_drop">Noticias</a></li>
                    <li><a href="#seccion3" class="dropdown-trigger" data-target="id_drop">Avisos</a></li>
                    <li><a href="{{route('iniciodirectorio')}}" class="dropdown-trigger" data-target="id_drop">Directorio</a></li>
                </ul>
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{route ('login')}}" class="dropdown-trigger" data-target="id_drop">Acceder</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#"><i class="material-icons"></i>ANUIES</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Inicio</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Noticias </a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Avisos</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Directorio</a></li>

    </ul>
    <!-- Page content-->
    @yield('content')
    <!-- End page content-->
    <footer class="page-footer" style="background-color: #85344c;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text flow-text">ANUIES</h5>
                    <p class="grey-text text-lighten-4">Asociación Nacional de Universidades e Instituciones de Educación Superior</p>
                    <span class="flow-text">Consejos Regionales</span>
                    <br>
                    <small class="right">
                        <span>NOROESTE <br> NORESTE <br> CENTRO OCCIDENTE <br> CRAM <br> CENTRO SUR <br> SUR SURESTE</span>
                    </small>
                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">- Plan de Desarrollo Institucional, Visión 2030 de la ANUIES</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Visión y acción 2030. Propuesta de la ANUIES para renovar la educación superior en México </a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Sesiones de los Órganos Colegiados</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Convocatorias de la SGE</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Convocatorias de IES Asociadas</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Becas de las IES Asociadas</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Programas y Premios</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">- Diario Oficial </a> / <a href="#!" class="grey-text text-lighten-3">PRODECON</a> / <a href="!#" class="grey-text text-lighten-3"> Nuevo Sistema de Justicia Penal</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row valign-wrapper">
                    <div class="col s12 m6">
                        <a href="#!" class="grey-text text-lighten-3">Normatividad</a>
                    </div>
                    <div class="col s12 m6">
                        <a href="#!" class="grey-text text-lighten-3">Procedimientos, requisitos y tipología para el ingreso de instituciones de Educación a la ANUIES, A.C.</a>
                    </div>
                </div>
            </div>
        </div>
        @yield('footer')
        <div class="footer-copyright">
            <div class="container">
                Derechos Reservados © 2020 ANUIES - Tenayuca 200, Col. Santa Cruz Atoyac, CP 03310, CDMX - Tel. +52 (55) 5420 4900
            </div>

        </div>
        <div class="footer-copyright">
            <div class="container">
                TIC'S UTVT
            </div>

        </div>
    </footer>
</body>

@yield('modales')

</html>