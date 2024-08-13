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
@endsection

