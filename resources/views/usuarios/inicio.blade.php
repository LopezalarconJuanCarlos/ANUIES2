@extends('layout.navbar')
@section('content')
<br>    
<?php
$session_id = session('session_id');
$session_name = session('session_name');
$session_tipo = session('session_tipo');
?>
       
@if($session_id) <!-- Contenido para verificar sesión iniciada -->
@if($session_tipo == 1) <!-- Contenido dependiendo del tipo de usuario -->

<div class="container p-4">
    <div class="row justify-content-md-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
            <h1>INICIO</h1>
            <div class="row">
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="{{ route ('usuarios')}}">
                                <div class="row no-gutters align-items-center" style="color: black;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-people" style="font-size: 4rem;"></i>                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Usuarios</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="{{ route ('tipos')}}">
                                <div class="row no-gutters align-items-center" style="color: blue;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-clipboard2-data" style="font-size: 4rem;"></i>                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Tipos-Usuarios</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="{{route('informacion')}}">
                                <div class="row no-gutters align-items-center" style="color:red;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-info-circle" style="font-size: 4rem;"></i>                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Informacion</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="#">
                                <div class="row no-gutters align-items-center" style="color: green;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-file-earmark-richtext" style="font-size: 4rem;"></i>                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Archivos</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="{{route ('imagen')}}">
                                <div class="row no-gutters align-items-center" style="color: orange;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-image" style="font-size: 4rem;"></i>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Imagenes</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 py-2">
                    <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                        <div class="card-body">
                            <a href="{{route('perfil')}}">
                                <div class="row no-gutters align-items-center" style="color: yellowgreen;">
                                    <div class="col-12 text-center py-5">
                                    <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            <h3>Perfil</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
</div>
            </div>
        </div>
    </div>
</div>




@endif
@endif
@endsection