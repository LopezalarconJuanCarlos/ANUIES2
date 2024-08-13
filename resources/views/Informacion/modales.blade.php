@yield('modales')

<!-- ELIMINAR  MODAL -->
@foreach ($informacion as $i )
<div class="modal fade" id="deleteModal{{ $i->id_informacion }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Informacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                ¿Realmente desea eliminar el registro?
                <strong>
                    <p>{{$i->titulo}}</p>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <form action="{{ route('eliminarinfor', ['id' => $i->id_informacion]) }}" method="POST" enctype="multipart/form-data">
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
@foreach ($informacion as $i)
<div class="modal fade" id="modalshow{{ $i->id_informacion }}" tabindex="-1" aria-labelledby="modalshowLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalshowLabel">Detalles | {{ $i -> titulo }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p><strong>Informacion: </strong><br>{{$i -> informacion}}</p>
                    <div class="col-6 text-center">
                        <p><strong>Fecha de inicio de publicacion: </strong><br>{{$i -> fi_publicacion}}</p>
                    </div>
                   <div class="col-6 text-center">
                        <p><strong>Fecha de inicio de publicacion: </strong><br>{{$i -> fi_publicacion}}</p>
                    </div>
                    <div class="col-6 text-center">
                        <strong>Activo: </strong>@if($i -> activo > 0) <p style="color: green;">Activo</p> @else <p style="color: red;">Inactivo</p> @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- SHOW MODAL END -->



<!-- EDIT MODAL START -->
@foreach ($informacion as $i)
<div class="modal fade" id="exampleModal{{ $i ->id_informacion }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('guardar', ['id' => $i->id_informacion]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field('PATCH') }}
                    {{ method_field('PUT') }}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="titulo" placeholder="Titulo de la noticia" value="{{ $i -> informacion }}">
                        <label for="floatingInput">Titulo:</label>
                    </div>
                    <div class="row py-2">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Informacion:</label>
                            <input type="text" class="form-control" aria-label="First name" name="informacion" value="{{ $i -> informacion }}">
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de inicio:</label>
                        <input type="date" class="form-control" id="fi_publicacion" name="fi_publicacion" value="{{ $i -> fi_publicacion }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de fin:</label>
                        <input type="date" class="form-control" id="ff_publicacion" name="ff_publicacion" value="{{ $i -> ff_publicacion }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            @if($i -> activo > 0)
                            <input class="form-check-input" type="checkbox" name="activo" checked>
                            @else
                            <input class="form-check-input" type="checkbox" name="activo">
                            @endif
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            @if($i -> activobanner > 0)
                            <input class="form-check-input" type="checkbox" name="activobanner" checked>
                            @else
                            <input class="form-check-input" type="checkbox" name="activobanner">
                            @endif
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo Banner</label>
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
</div>

@endforeach
<!-- EDIT MODAL END -->







        
<!-- ADD MODAL START -->
<div class="modal fade" id="modalalta" tabindex="-1" aria-labelledby="modalaltaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Informacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('añadirinfo') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row py-2">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Titulo:</label>
                            <input type="text" class="form-control" aria-label="First name" name="titulo">
                            @error('titulo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Informacion:</label>
                            <input type="text" class="form-control" aria-label="Last name" name="informacion">
                            @error('informacion')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                     
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de inicio de publicacion:</label>
                        <input type="date" class="form-control" id="fi_publicacion" name="fi_publicacion">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de finalizacion de la publicacion:</label>
                        <input type="date" class="form-control" id="ff_publicacion" name="ff_publicacion">
</div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="activo" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="activobanner" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Activo Banner</label>
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