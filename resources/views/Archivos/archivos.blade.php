@extends('layout.navbar')
@section('content')
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h3>Archivos</h3>
                </div>
                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_alta" data-bs-toggle="modal" data-bs-target="#modalalta"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID_archivo</th>
                                <th>Nombre</th>
                                <th>Archivo</th>
                                <th>Informacion</th>
                                <th>Detalle</th>                    
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($archivos as $a)
                            <tr>
                                <br>
                                <td>{{ $a->id_archivos}}</td>
                                <td>{{ $a->archivo}}</td>
                                <td>{{ $a->nombre}}</td>
                                <td>{{ $a->id_informacion}}</td>
                                <td>{{ $a->detalle}}</td>
                                <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $a->id_archivos }}"><i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $a->id_archivos }}"><i class="bi bi-pencil-square"></i></button>
                                    <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($a -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $a->id_archivos }}"><i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $a->id_archivos}}"><i class="bi bi-trash3-fill"></i></button>
                                    @endif
                                </td>
                             </tr>
                            @endforeach
                    </table>
                    @include('Archivos.modales')
                </div>
            </div>
        </div>

        @endsection