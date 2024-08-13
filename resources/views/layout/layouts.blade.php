<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') | ANUIES</title>
    @include('layout.head')
</head>
<?php
$session_id = session('session_id');
$session_name = session('session_name');
$session_tipo = session('session_tipo');
$session_area = session('session_area');
?>

@if($session_id) <!-- Contenido para verificar sesión iniciada -->
@if($session_tipo == 1 || $session_tipo == 2) <!-- Contenido dependiendo del tipo de usuario -->


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
                    <li><a href="{{route('inicios')}}" class="dropdown-trigger" data-target="id_drop">Inicio</a></li>
                    <li><a href="#seccion1" class="dropdown-trigger" data-target="id_drop">Noticias</a></li>
                    <li><a href="#seccion3" class="dropdown-trigger" data-target="id_drop">Avisos</a></li>
                    <li><a href="{{route('directorios')}}" class="dropdown-trigger" data-target="id_drop">Directorios</a></li>
                    <li><a href="{{route('perfil')}}" class="dropdown-trigger" data-target="id_drop">Perfil</a></li>

                    @if($session_tipo==1)
                    <li><a href="{{route('inicio')}}" class="dropdown-trigger" data-target="id_drop">Registros</a></li>
                    @endif
                </ul>
                <ul class="hide-on-med-and-down right">
                    <li>
                        @if($session_id)
                        <?php
                        echo '<b>    ' . $session_name . '</b><br>';
                        ?>
                        @else
                        @endif
                    </li>
                    <li><a href="{{route ('logout')}}" class="dropdown-trigger" data-target="id_drop">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#"><i class="material-icons"></i>ANUIES</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Inicio</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Noticias </a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Avisos</a></li>
        <li><a href="{{route('directorios')}}"><!--<i class="material-icons"></i>-->Directorio</a></li>
        <li><a href="#"><!--<i class="material-icons"></i>-->Perfil</a></li>


        @if($session_tipo==1)
        <li><a href="{{route('inicio')}}" class="dropdown-trigger" data-target="id_drop">Registros</a></li>
        @endif
    </ul>
    <!-- Page content-->
    @yield('content')
    <!-- End page content-->
    <footer class="page-footer" style="background-color: #85344c;">
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

@endif
@endif

</html>