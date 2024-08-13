@extends('layout.layout')
@section('content')
@section('title', 'Inicio')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div class="container p-4">
    <div class="row justify-content-md-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
            <h1>Noticia : {{$detalle->titulo}}</h1>
            <div class="col-md-6 mb-4 py-2">
                <div class="card text-bg-light border-left-primary shadow h-100 rounded-4">
                    <div class="card-body">
                        <center>
                            <h3><img src="{{ asset ('Imagenes/'.$detalles->foto) }}"></h3>
                        </center>

                        <div style="text-align: center;">
                            {{$detalle->informacion}}
                        </div>
                        <div class="row no-gutters align-items-center" style="color: blue;">
                            <div class="col-12 text-center py-5">
                                <i class="bi bi-clipboard2-data" style="font-size: 4rem;"></i>
                            </div>
                            <br>
                           <table class="table">
                            <div class="col-12 text-center">
                                <tr>
                                <th><center>Imagenes</center></th>
                                <th><center>Archivos</center></th>
                                </tr>
                                <tr>
                               <td> <center> <a href="{{route('image',['id' => $detalle->id_informacion])}}"><span class="material-symbols-outlined">
                                                imagesmode
                                            </span><i class="bi bi-eye-fill"></i></a></center> </td>
                                <td><center> <a href="{{route('archi',['id' => $detalle->id_informacion])}}"><span class="material-symbols-outlined">
                                                picture_as_pdf
                                            </span></a></center></td>
                                </tr>
                            </div>
                           </table>
                            <br>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</a>
</div>
</div>
</div>













@section('footer')
<div class="container">
    <div class="row">
        <div class="col l6 s12">
            <h5 class="white-text flow-text">ANUIES</h5>
            <p class="grey-text text-lighten-4">Asociación Nacional de Universidades e Instituciones de Educación Superior</p>
            <span class="flow-text">Consejos Regionales</span>
            <br>
            <small class="right">
                <span>NOROESTE <br> NORESTE <br> CENTRO OCCIDENTE <br> CRAM <br> CENTRO SUR <br> SUR SURESTE</span>
            </small>
        </div>
        <div class="col l4 offset-l2 s12">
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">- Plan de Desarrollo Institucional, Visión 2030 de la ANUIES</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Visión y acción 2030. Propuesta de la ANUIES para renovar la educación superior en México </a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Sesiones de los Órganos Colegiados</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Convocatorias de la SGE</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Convocatorias de IES Asociadas</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Becas de las IES Asociadas</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Programas y Premios</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">- Diario Oficial </a> / <a href="#!" class="grey-text text-lighten-3">PRODECON</a> / <a href="!#" class="grey-text text-lighten-3"> Nuevo Sistema de Justicia Penal</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
        <div class="row valign-wrapper">
            <div class="col s12 m6">
                <a href="#!" class="grey-text text-lighten-3">Normatividad</a>
            </div>
            <div class="col s12 m6">
                <a href="#!" class="grey-text text-lighten-3">Procedimientos, requisitos y tipología para el ingreso de instituciones de Educación a la ANUIES, A.C.</a>
            </div>
        </div>
    </div>
</div>
@endsection

@endsection