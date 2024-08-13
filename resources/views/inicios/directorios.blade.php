@extends('layout.layouts')
@section('content')
@section('title', 'Inicio')

<?php
$session_id = session('session_id');
$session_name = session('session_name');
$session_tipo = session('session_tipo');
?>
       
@if($session_id) <!-- Contenido para verificar sesión iniciada -->
@if($session_tipo == 1 || $session_tipo == 2) <!-- Contenido dependiendo del tipo de usuario -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<br>


<div class="container">
  <div class="row">
    <div class="col s12 m12">

         @foreach($directorio as $d)
    <div class="col s12 m12">
                <a class="black-text text-lighten-3"><strong>Puesto: {{$d->puesto}}</strong></a><br>
                <a class="black-text text-lighten-3">Nombre: {{$d->nombre}}</a><br>
                <a class="black-text text-lighten-3">Institucion: {{$d->institucion}}</a><br>
                <a class="black-text text-lighten-3">Telefono: {{$d->telefono}}</a><br>
                <a class="black-text text-lighten-3">Correo electrónico: {{$d->email}}</a>           
    </div>
    @endforeach


   
<table class="table">
  <thead>
    <tr>
      <th scope="col"><a style="color: #85344C"  >IES</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach($universidades as $u)
    <tr>
      <td><a href="{{$u->url}}" style="color: #85344C">{{$u->nombre}}</a></td>
      <td>{{$u->siglas}}</td>
      <td><img src="{{ asset ('Imagenes/'.$u->logo) }}" height="200" width="200"></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>











@section('footer')
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
        @endif
        @endif
@endsection

