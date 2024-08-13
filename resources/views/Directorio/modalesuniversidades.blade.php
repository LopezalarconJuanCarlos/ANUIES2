@yield('modales')


<!-- ADD MODAL START -->
<div class="modal fade" id="modalaltau" tabindex="-1" aria-labelledby="modalaltaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Imagen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('agregaruniversidad') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                 
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" aria-label="First name" name="nombre" >
                            @error('nombre')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Siglas:</label>
                            <input type="text" class="form-control" aria-label="First name" name="siglas">
                            @error('siglas')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Logo:</label>
                        <input class="form-control" type="file" name="logo">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">URL:</label>
                            <input type="text" class="form-control" aria-label="First name" name="url">
                            @error('URL')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
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
