@extends('layout.layout')
@section('content')
@section('title', 'Inicio')

<div class="carousel carousel-slider">
  @foreach($imagenes as $imagen)
  <a class="carousel-item" href="#"><img src="{{asset ('Imagenes/'.$imagen->nom) }}" width="924px" height="322px"></a>
  @endforeach
  <a class="carousel-item" href="#"><img src="{{asset ('Imagenes/Premio-Nacional-Artes-Literatura.jpg') }}"></a>
  <a class="carousel-item" href="#"><img src="{{ asset('Imagenes/MEDIOS-ANUIES-02-scaled.jpg') }}" alt=""></a>
</div>

<div id="seccion1">
  <div class="container">
    <div class="row">
      <div class="col s12 m12">
        <h3>Noticias</h3>
      </div>
      @foreach ($informacion as $card)
      <div class="col s12 m4">
        <div class="card hoverable" style="border-radius: 25px;">
          <div class="card-image">
            <img src="{{ asset ('Imagenes/'.$card->nombre) }}" style="border-radius: 25px 25px 0px 0px; height: 209px;">
            <a class="btn-floating btn-large halfway-fab waves-effect waves-light red lighten-1 tooltipped" data-position="left" data-tooltip="Seguir leyendo..." href="{{route('noticia',['id' => $card->id])}}"><i class="material-icons">visibility</i></a>
          </div>
          <div class="card-content">
            <p>{{$card->fecha}}</p>
            <br>
            <span class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $card->titulo }}</span>
            <p>{{ $card->informacion }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>












@endsection