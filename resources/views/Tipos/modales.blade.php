@yield('modales')


<!-- ADD MODAL START -->
<div class="modal fade" id="modalalta" tabindex="-1" aria-labelledby="modalaltaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('añadir') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="clave" placeholder="name@example.com">
                        <label for="floatingInput">Clave:</label>
                        @error('clave')
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
                            <label for="exampleInputEmail1" class="form-label">Descripcion:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="descripcion">
                            @error('descripcion')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
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



@foreach ($Tipos as $t )
<div class="modal fade" id="deleteModal{{ $t->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Usuarios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                ¿Realmente desea eliminar el registro?
                <strong>
                    <p>{{$t->nombre}}</p>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <form action="{{ route('delete', ['id' => $t->id]) }}" method="POST" enctype="multipart/form-data">
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
@foreach ($Tipos as $t)
<div class="modal fade" id="modalshow{{ $t->id}}" tabindex="-1" aria-labelledby="modalshowLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalshowLabel">Detalles | {{ $t -> clave }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <center><p><strong>Nombre: </strong><br>{{$t -> nombre}}</p></center>  

                       <center> <p><strong>Descripcion: </strong><br>{{$t -> descripcion}}</p></center>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- SHOW MODAL END -->



<!-- EDIT MODAL START -->
@foreach ($Tipos as $t)
<div class="modal fade" id="exampleModal{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('salvart', ['id' => $t->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field('PATCH') }}
                    {{ method_field('PUT') }}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="clave" placeholder="name@example.com" value="{{ $t -> clave }}">
                        <label for="floatingInput">Clave:</label>
                    </div>
                    <div class="form-floating mb-3">
                    <div class="form-floating mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="nombre" value="{{ $t -> nombre }}">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleInputEmail1" class="form-label">Descripcion:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="descripcion" value="{{ $t -> descripcion }}">
                        </div>
                    <div class="mb-3">
                        <div class="form-check">
                            @if($t -> activo > 0)
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