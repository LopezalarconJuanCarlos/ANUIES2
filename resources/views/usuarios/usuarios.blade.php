@extends('layout.navbar')
@section('content')
<br>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h3>Usuarios</h3>
                </div>
                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_alta" data-bs-toggle="modal" data-bs-target="#modalalta"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Foto</th>
                                <th>Clave</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Genero</th>
                                <th>Email</th>
                                <th>Fecha de nacimiento</th>
                                <th>Activo</th>
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Usuarios as $usuarios)
                        <?php
                            $a = 1;
                            ?>
                            
                            <tr>
                                <br>
                                <td><?php echo $a++ ?></td>
                                <td><img src="{{ asset ('Imagenes/'.$usuarios->foto) }}" style="width:50px;"></td>
                                <td>{{ $usuarios->clave}}</td>
                                <td>{{ $usuarios->nombre}}</td>
                                <td>{{ $usuarios->app.' '. $usuarios-> apm}}</td>
                                <td>{{ $usuarios->gen}}</td>
                                <td>{{ $usuarios->email}}</td>
                                <td>{{$usuarios->fn}}</td>
                                <td>
                                    @if($usuarios->activo == 1) <b style="color: #0F0">Activo</b>
                                    @else <b style="color: #F00">Inactivo</b>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $usuarios->id_usuario }}"><i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $usuarios->id_usuario }}"><i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($usuarios -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $usuarios->id_usuario }}"><i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $usuarios->id_usuario }}"><i class="bi bi-trash3-fill"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    @include('Usuarios.modales')

                </div>
            </div>
        </div>



        @endsection