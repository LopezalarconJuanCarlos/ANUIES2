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

<div class="carousel carousel-slider">
  @foreach($imagenes as $imagen)
  <a class="carousel-item" href="#"><img src="{{asset ('Imagenes/'.$imagen->nom) }}"  width="924px" height="322px"></a>
  @endforeach
  <a class="carousel-item" href="#"><img src="{{asset ('Imagenes/Premio-Nacional-Artes-Literatura.jpg') }}"></a>
</div>
            
<div id="seccion1">
<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <h3>Noticias</h3>
    </div>
    @foreach ($informacion as $card)
    <div class="col s12 m4">
      <div class="card hoverable" style="border-radius: 5px;">
        <div class="card-image">
          <img src="{{ asset ('Imagenes/'.$card->nombre) }}" style="border-radius: 5px 5px 0px 0px; height: 209px;">
          <a class="btn-floating btn-large halfway-fab waves-effect waves-light red lighten-1 tooltipped" data-position="left" data-tooltip="Seguir leyendo..." href="{{route('noticias',['id' => $card->id])}}"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <p>{{$card->fecha}}</p>
          <br>
          <span class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $card->titulo }}</span>
          <p>{{ $card->informacion }}</p>
        </div>
      </div>
    </div>
    @endforeach
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

@endsection