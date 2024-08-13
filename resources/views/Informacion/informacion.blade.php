@extends('layout.navbar')
@section('content')
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h3>Informacion</h3>
                </div>
                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_alta" data-bs-toggle="modal" data-bs-target="#modalalta"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Informacion</th>
                                <th>Fecha de inicion de publicacion</th>
                                <th>Fecha de fin de publicacion</th> 
                                <th>Activo</th>
                                <th>Activo Banner</th>
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($informacion as $i)
                            <tr>
                                <br>
                                <td>{{$i->id_informacion}}</td>
                                <td>{{ $i->titulo}}</td>
                                <td>{{ $i->informacion}}</td>
                                <td>{{ $i->fi_publicacion}}</td>
                                <td>{{ $i->ff_publicacion}}</td>
                                <td>
                                    @if($i->activo == 1) <b style="color: #0F0">Activo</b>
                                    @else <b style="color: #F00">Inactivo</b>
                                    @endif
                                </td>
                                <td>
                                    @if($i->activobanner == 1) <b style="color: #0F0">Activo Banner</b>
                                    @else <b style="color: #F00">Inactivo</b>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $i->id_informacion }}">
<i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $i->id_informacion}}"><i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($i -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $i->id_informacino }}">
<i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $i->id_informacion }}">
<i class="bi bi-trash3-fill"></i></i></button>
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                    </table>
@include('informacion.modales')

                </div>
            </div>
        </div>



        @endsection