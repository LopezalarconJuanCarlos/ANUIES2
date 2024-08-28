@extends('layout.layout')
@section('content')
@section('title', 'Directorio')
<br>


<div class="container">
  <div class="row">
    <div class="col l12 m12 s12" style="padding-bottom: 20px;">
      <h3>Directorio</h3>
    </div>
    @foreach($directorio as $d)
    <div class="col l6 m6 s12">
      <p><strong style="color: #85344C">Puestos:</strong> {{$d->puesto}} <br> <strong style="color: #85344C">Nombre:</strong> {{$d->nombre}} <br> <strong style="color: #85344C">Institución:</strong> {{$d->institucion}} <br> <strong style="color: #85344C">Teléfono:</strong> {{$d->telefono}} <br> <strong style="color: #85344C">Correo electrónico:</strong> {{$d->email}}</p>
    </div>
    @endforeach

    <table class="table">
      <thead>
        <tr>
          <th scope="col"><a style="color: #85344C">IES</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach($universidades as $u)
        <tr>
          <td><a href="{{$u->url}}" style="color: #85344C">{{$u->nombre}}</a></td>
          <td>{{$u->siglas}}</td>
          <td><img src="{{ asset ('Imagenes/'.$u->logo) }}" style="width:50px;"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection