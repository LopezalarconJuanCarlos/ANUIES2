@extends('layout.navbar')
@section('content')
<br>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h4>Directivos</h4>
                </div>

                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_alta" data-bs-toggle="modal" data-bs-target="#modalalta"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Puesto</th>
                                <th>Nombre Directivo</th>
                                <th>Institucion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Activo</th>
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $a = 1;
                            ?>
                            @foreach($directorio as $d)
                            <tr>
                                <br>
                                <td><?php echo $a++ ?></td>
                                <td>{{ $d->puesto}}</td>
                                <td>{{ $d->nombre.''.$d->app.''.$d->apm}}</td>
                                <td>{{ $d->institucion}}</td>
                                <td>{{ $d->telefono}}</td>
                                <td>{{ $d->email}}</td>
                                <td>
                                    @if($d->activo == 1) <b style="color: #0F0">Activo</b>
                                    @else <b style="color: #F00">Inactivo</b>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $d->id_directorio }}"><i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id_directorio }}"><i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($d -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $d->id_directorio }}"><i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $d->id_directorio }}"><i class="bi bi-trash3-fill"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    @include('Directorio.modales')
                </div>
            </div>
        </div>



        <div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h4>Universidades</h4>
                </div>
                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_altau" data-bs-toggle="modal" data-bs-target="#modalaltau"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Siglas</th>
                                <th>Logos</th>
                                <th>URL</th>
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $a = 1;
                            ?>
                            @foreach($universidades as $u)
                            <tr>
                                
                                <td><?php echo $a++ ?></td>
                                <td>{{ $u->nombre}}</td>
                                <td>{{ $u->siglas}}</td>
                                <td><img src="{{ asset ('Imagenes/'.$u->logo) }}" style="width:50px;"></td>
                                <td>{{ $u->url}}</td>
                                <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $u->id_universidades }}"><i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id_universidades }}"><i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($u -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $d->id_universidades }}"><i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $d->id_universidades }}"><i class="bi bi-trash3-fill"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    @include('Directorio.modalesuniversidades')
                </div>
            </div>
        </div>



        @endsection