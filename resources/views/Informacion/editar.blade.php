@extends('layout.navbar')
@section('content')
<br>

<div class="container p-4">
<div class="row">
        <div class="col-12 col-sm-12 p-4">
            <h2>Información de los tipos</h2>
        </div>
    </div>
    <div class="row bg-light rounded-3 shadow-lg">
        <div class="col-lg-10 col-sm-12 p-2 m-4 ">
            <h4>Tipos</h4>
        </div>
            
        <div class="col-lg-6 col-sm-12 table-responsive">
            <table class="table">
                    <form action="{{ route ('salvari', ['id'=> $Informacion->id_informacion])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <table>
                            <tr>
                                <td colspan='2'>
                                    @if(count($errors) >0)
                                    @foreach($errors->all() as $error)
                                    {{ $error }} <br>
                                    @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Titulo:</h4>
                            </strong></td>
                        <td>
                            <input type="text" class="form-control" value="{{ $Informacion->titulo }}" name="titulo">
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Informacion:</h4>
                            </strong></td>
                        <td>
                            <input type="text" class="form-control" value="{{ $Informacion->informacion }}" name="informacion">
                           
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Fecha Inicio de la publicacion:</h4>
                            </strong></td>
                        <td>
                            <input type="date" class="form-control" value="{{ $Informacion->fi_publicacion }}" name="fi_publicacion">
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Fecha fin de la publicacion:</h4>
                            </strong></td>
                        <td>
                            <input type="date" class="form-control" value="{{ $Informacion->ff_publicacion }}" name="ff_publicacion">
                            
                        </td>
                    </tr>
                            <tr>
                                <td colspan="2">
                                <button type="submit" class="btn btn-success">Editar</button>
                                <a href="{{route ('tipos')}}" type="text" class="btn btn-secondary">Cancelar</a>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </form>
        </center>
        </div>
            </div>
        </div>
</div>













@endsection