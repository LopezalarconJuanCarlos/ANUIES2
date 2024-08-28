@extends('layout.layout')
@section('content')
@section('title', 'Inicio')

<div class="container">
    <div class="row" style="padding-bottom: 40px;">
        <br>
        <div class="col s12" style="padding-bottom: 20px;">
            <h3>{{$detalle->titulo}}</h3>
        </div>
        <br>
        <div class="col l6 m6 s12">
            <p>{{$detalle->informacion}}</p>
        </div>
        <div class="col l6 m6 s12 center-align valign-wrapper">
            <img class="materialboxed" width="400" src="{{ asset ('Imagenes/'.$detalles->foto) }}">
        </div>
    </div>
</div>


<div class="fixed-action-btn">
  <a class="btn-floating btn-large" style="color: #56a29b;">
    <i class="large material-icons">touch_app</i>
  </a>
  <ul>
    <li><a class="btn-floating red" href="{{route('image',['id' => $detalle->id_informacion])}}"><i class="material-icons">collections</i></a></li>
    <li><a class="btn-floating blue" href="{{route('archi',['id' => $detalle->id_informacion])}}"><i class="material-icons">description</i></a></li>
  </ul>
</div>

@endsection