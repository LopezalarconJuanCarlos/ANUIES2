@yield('modales')

@foreach ($imagenes as $i )
<div class="modal fade" id="deleteModal{{ $i->id_imagen }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar imagenes</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                ¿Realmente desea eliminar el registro?
                <strong>
                    <p>{{$i -> nombre}}</p>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <form action="{{ route('eliminarimagen', ['id' => $i->id_imagen]) }}" method="POST" enctype="multipart/form-data">
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
@foreach ($imagenes as $i)
<div class="modal fade" id="modalshow{{ $i->id_imagen }}" tabindex="-1" aria-labelledby="modalshowLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalshowLabel">Detalles | {{ $i -> nombre }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">             
                    <p><strong>Imagen de: </strong><br>{{$i->id_informacion}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- SHOW MODAL END -->


    <!-- EDIT MODAL START -->
    @foreach ($imagenes as $i)
    <div class="modal fade" id="exampleModal{{ $i->id_imagen }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Registro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('salvarimagen', ['id' => $i->id_imagen]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field('PATCH') }}
                        {{ method_field('PUT') }}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="nombre" placeholder="" value="{{ $i -> nombre}}">
                            <label for="floatingInput">Clave:</label>
                        </div>
                        <div class="row py-2">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Informacion:</label>
                                <input type="text" class="form-control" aria-label="First name" name="id_informacion" value="{{ $i -> id_informacion }}">
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Imagen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('agregarimagen') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Seleccione una foto de perfil:</label>
                        <input class="form-control" type="file" name="foto" oninput="autoFill()" id="input1">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" aria-label="First name" name="nombre" id="input2" readonly>
                            @error('nombre')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <hr>
                        <label for=""> Seleccione la noticia de la cual es la imagen:</label>
                        <select class="form-select" id="id_infomacion" name="id_informacion">
                           <option selected>Seleccione una opcion</option>
                           @foreach($informacion as $i)
                            <option value="{{ $i -> id_informacion }}"> {{ $i -> titulo }}</option>
                            @endforeach
                        </select>
                        <hr>
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

<script>
function autoFill() {
  var input1Value = document.getElementById('input1').value;

  // Obtener solo el nombre del archivo de la ruta completa
  var nombreImagen = obtenerNombreImagen(input1Value);
    // Obtener la fecha actual
    var fechaActual = obtenerFechaActual();

// Concatenar la fecha actual con el nombre de la imagen
var nombreConFecha = fechaActual + '' + nombreImagen;


  // Llenar el campo de entrada 2 con el nombre de la imagen
  document.getElementById('input2').value = nombreConFecha;
}

function obtenerNombreImagen(rutaCompleta) {
  var indiceUltimaBarra = rutaCompleta.lastIndexOf('\\');
  var nombreImagen = rutaCompleta.substring(indiceUltimaBarra + 1);
  return nombreImagen;
}
function obtenerFechaActual() {
  var fecha = new Date();

  var dia = fecha.getDate();
  if (dia < 10) {
    dia = '0' + dia;
  }

  var mes = fecha.getMonth() + 1;
  if (mes < 10) {
    mes = '0' + mes;
  }

  var anio = fecha.getFullYear();
  
  var horas = fecha.getHours();
  if (horas < 10) {
    horas = '0' + horas;
  }

  var minutos = fecha.getMinutes();
  if (minutos < 10) {
    minutos = '0' + minutos;
  }

  var segundos = fecha.getSeconds();
  if (segundos < 10) {
    segundos = '0' + segundos;
  }

  var fechaActual = anio + '' + mes + '' + dia + '' + horas + '' + minutos + '' + segundos;
  return fechaActual;
}
  </script>



