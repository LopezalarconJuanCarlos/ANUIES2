@extends('layout.navbar')
@section('content')
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-16">
            <div class="row">
                <div class="col p-4">
                    <h3>Tipos</h3>
                </div>
                <div class="col p-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success mx-10 my-2" id="btn_alta" data-bs-toggle="modal" data-bs-target="#modalalta"><i class="bi bi-plus-lg style=" font-size:2rem;"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table display" id="userTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Clave</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Activo</th>
                                <th class="text-center">Acciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Tipos as $t)
                            <tr>
                                <br>
                                <td>{{ $t->clave}}</td>
                                <td>{{ $t->nombre}}</td>
                                <td>{{ $t->descripcion}}</td>
                                <td>
                                    @if($t->activo == 1) <b style="color: #0F0">Activo</b>
                                    @else <b style="color: #F00">Inactivo</b>
                                    @endif
                                    <td class="text-center">
                                    <!-- Button show modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalshow{{ $t->id }}"><i class="bi bi-eye-fill"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button edit modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t->id }}">
<i class="bi bi-pencil-square"></i></button>
                                </td>
                                <td class="text-center">
                                    <!-- Button delete modal -->
                                    @if($t -> activo > 0)
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $t->id }}"><i class="bi bi-trash3-fill"></i></button>
                                    @else
                                    <button type="button" class="btn btn-dark" disabled data-bs-toggle="modal" data-bs-target="#deleteModal{{ $t->id }}"><i class="bi bi-trash3-fill"></i></button>
                                    @endif
                                </td> </tr>
                            @endforeach
                    </table>
                    @include('Tipos.modales')

                </div>
            </div>
        </div>

<script>
function mostrarMensaje() {
    alert('Desea desactivar el tipo');
}
</script>




        @endsection






