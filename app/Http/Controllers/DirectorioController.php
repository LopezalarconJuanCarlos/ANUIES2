<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Universidades;

class DirectorioController extends Controller
{
    public function directorio(){
        $directorio = Directorio::all();
        $universidades = Universidades::all();
        return view ('Directorio.inicio', compact('directorio','universidades'));
    }
    public function iniciodirectorio(){
        $directorio = \DB::select('SELECT tb_directorio.puesto, tb_directorio.nombre, tb_directorio.app, tb_directorio.apm, 
        tb_directorio.institucion, tb_directorio.telefono, tb_directorio.email
    FROM tb_directorio
    WHERE tb_directorio.activo = "1"');
    $universidades = Universidades::all();
        return view ('Directorio.directorio', compact('directorio','universidades'));
    }
    public function directorios(){
        $directorio = \DB::select('SELECT tb_directorio.puesto, tb_directorio.nombre, tb_directorio.app, tb_directorio.apm, 
        tb_directorio.institucion, tb_directorio.telefono, tb_directorio.email
    FROM tb_directorio
    WHERE tb_directorio.activo = "1"');
    $universidades = Universidades::all();
        return view ('inicios.directorios', compact('directorio','universidades'));
    }
    
    public function añadirdirectivo(Request $request)
    {

            //dd($request->all());

        Directorio::create(array(
            'puesto' => $request->input('puesto'),
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm'=> $request->input('apm'),
            'institucion' => $request->input('institucion'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'activo' => 1,
        ));

        return redirect('directorio');
    }



    
    public function salvardirectorio(Directorio $id, Request $request)
    {
         $query = Directorio::find($id->id_usuario);

      

        //dd($foto2);
    
        $activo = 1;

        if ($request->input('activo') == '') {
            $activo = 0;
        } else if ($request->input('activo') == 'ON') {
            $activo = 1;
        }
        //dd($request->all());
        $query = Directorio::find($id->id_directorio);
        $query->puesto = trim($request->puesto);
        $query->nombre = trim($request->nombre);
        $query->app = trim($request->app);
        $query->apm = trim($request->apm);
        $query->institucion = trim($request->institucion);
        $query->telefono = trim($request->telefono);
        $query->email = trim($request->email);

        $query->save();
        return redirect()->route("directorio", ['id' => $id->id_directorio]);
    }


    public function eliminardirectorio(Directorio $id, Request $request)
    {
        $query = Directorio::find($id->id_directorio);
    $query -> activo = 0;
        $query -> save();
        return redirect('directorio');
    }




}
