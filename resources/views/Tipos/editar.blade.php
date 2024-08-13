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
                    <form action="{{ route ('salvart', ['id'=> $tipos->id])}}" method="POST" enctype="multipart/form-data">
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
                                <h4>Clave:</h4>
                            </strong></td>
                        <td>
                            <input type="text" class="form-control" value="{{ $tipos->clave }}" name="clave">
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Nombre:</h4>
                            </strong></td>
                        <td>
                            <input type="text" class="form-control" value="{{ $tipos->nombre }}" name="nombre">
                           
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-secondary"><strong>
                                <h4>Descripcion:</h4>
                            </strong></td>
                        <td>
                            <input type="text" class="form-control" value="{{ $tipos->descripcion }}" name="descripcion">
                            
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