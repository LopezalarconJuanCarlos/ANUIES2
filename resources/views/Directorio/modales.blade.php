@yield('modales')


@foreach ($directorio as $d )
<div class="modal fade" id="deleteModal{{ $d->id_directorio }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Usuarios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                ¿Realmente desea eliminar el registro?
                <strong>
                    <p>{{$d -> puesto .' | '. $d -> nombre .' '. $d -> app .' '. $d->apm}}</p>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <form action="{{ route('eliminardirectorio', ['id' => $d->id_directorio]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field('PATCH') }}
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- ELIMINAR END MODAL -->

<!-- SHOW MODAL START -->
@foreach ($directorio as $d)
<div class="modal fade" id="modalshow{{ $d->id_directorio }}" tabindex="-1" aria-labelledby="modalshowLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalshowLabel">Detalles | {{ $d -> id_directorio }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                    <p><strong>Nombre: </strong><br>{{$d-> nombre .' '. $d -> app .' '. $d->apm}}</p>
                    <div class="col-6 text-center">
                        <p><strong>Puesto: </strong><br>{{$d -> puesto}}</p>
                    </div>
                    <div class="col-6 text-center">
                        <strong>Activo: </strong>@if( $d-> activo > 0) <p style="color: green;">Activo</p> @else <p style="color: red;">Inactivo</p> @endif
                    </div>
                    <p><strong>Institucion: </strong>{{$d -> institucion}}</p>
                    <p><strong>Telefono: </strong> {{$d->telefono}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- SHOW MODAL END -->


<!-- EDIT MODAL START -->
@foreach ($directorio as $d)
<div class="modal fade" id="exampleModal{{ $d->id_directorio }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('salvardirectorio', ['id' => $d->id_directorio]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field('PATCH') }}
                    {{ method_field('PUT') }}

                    <div class="row py-2">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" aria-label="First name" name="nombre" value="{{ $d -> nombre }}">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Apellido Paterno:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="app" value="{{ $d -> app }}">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Apellido Materno:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="apm" value="{{ $d -> apm }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Puesto:</label>
                        <input type="text" class="form-control" id="puesto" name="puesto" value="{{ $d -> puesto }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Institucion:</label>
                        <input type="text" class="form-control" id="puesto" name="institucion" value="{{ $d -> institucion }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono:</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $d -> telefono }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{$d -> email}}" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            @if($d -> activo > 0)
                            <input class="form-check-input" type="checkbox" name="activo" checked>
                            @else
                            <input class="form-check-input" type="checkbox" name="activo">
                            @endif
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-success" value="Enviar" />
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- EDIT MODAL END -->


<!-- ADD MODAL START -->
<div class="modal fade" id="modalalta" tabindex="-1" aria-labelledby="modalaltaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Directivos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('añadirdirectivo') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="puesto" placeholder="Director interino">
                        <label for="floatingInput">Puesto:</label>
                        @error('puesto')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="row py-2">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" aria-label="First name" name="nombre">
                            @error('nombre')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Apellido paterno:</label>
                            <input type="text" class="form-control" aria-label="First name" name="app">
                            @error('app')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Apellido Materno:</label>
                            <input type="text" class="form-control" aria-label="First name" name="apm">
                            @error('apm')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Institucion:</label>
                        <input type="text" class="form-control" aria-label="Last name" name="institucion">
                        @error('institucion')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Telefono:</label>
                        <input type="text" class="form-control" aria-label="Last name" name="telefono">
                        @error('telefono')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        @error('email')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="activo" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" href="usuarios/store" class="btn btn-success" value="Enviar" />
            </div>
            </form>
        </div>
    </div>
</div>
<!-- ADD MODAL END -->




<script>
    $(function() {
        $('#modalmod').modal('show')
    });
</script>
<script>
    $(function() {
        $('#modalshow').modal('show')
    });
    $(function() {
        $('#modalver').modal('show')
    });
    $(function() {
        $('#eliminarmodal').modal('show')
    });
</script>