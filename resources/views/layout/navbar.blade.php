
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | ANUIES</title>
</head>
<?php
$session_id = session('session_id');
$session_name = session('session_name');
$session_tipo = session('session_tipo');
$session_area = session('session_area');
?>

@if($session_id) <!-- Contenido para verificar sesión iniciada -->
@if($session_tipo == 1 || $session_tipo == 2) <!-- Contenido dependiendo del tipo de usuario -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/docs.css') }}">

</head>


<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #85344c;">
        <div class="container-fluid container">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                    <img src="{{ asset('Logos/LogoBlanco_anuies.png') }}" alt="ANUIES" height="60px" class="d-inline-block align-text-top">
                    <!-- Admin ANUIES -->
                </a>
            </div>
            <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('inicios')}}">Inicio</a>
                    </li>
                    @if($session_tipo==1)
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('inicio')}}">Sistema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('usuarios')}}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('tipos')}}">Tipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('informacion')}}">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('archivos')}}">Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('imagen')}}">Imagenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('directorio')}}">Directorio</a>
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>



<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    
@endif
@endif

</html>

