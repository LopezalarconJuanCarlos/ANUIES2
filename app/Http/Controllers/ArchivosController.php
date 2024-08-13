<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivos;
use App\Models\Imagenes;
use App\Models\Informacion;


class ArchivosController extends Controller
{
    public function archivos(){
        $archivos = Archivos::all();
        $informacion = \DB::select(' SELECT tb_informacion.id_informacion, tb_informacion.titulo FROM tb_informacion');
        return view ('Archivos.archivos', compact('archivos','informacion'));
    }

    public function agregararchivo(Request $request)
    {

        if ($request->file('archivo')  !=  '') {
            $file = $request->file('archivo');
            $archivo1 = $file->getClientOriginalName();
            $dates = date('YmdHis');
            $archivo2 = $dates . $archivo1;
            \Storage::disk('local')->put($archivo2, \File::get($file));
        } else {
            $archivo2 = 'archivos.docx';
        }
               // dd($request->all());

        Archivos::create(array(
            'nombre' => $request->input('nombre'),
            'archivo' => $archivo2,
            'id_informacion' => $request->input('id_informacion'),
            'detalle' => $request->input('detalle'),
            'activo' => 1,
        ));

        return redirect('archivos');
    }


    public function salvararchivo(Archivos $id, Request $request)
    {
         $query = Archivos::find($id->id_archivos);


        //dd($request->all());
        $query = Archivos::find($id->id_archivos);
        $query->nombre = trim($request->nombre);
        $query->id_informacion = trim($request->id_informacion);

        $query->save();
        return redirect()->route("archivos", ['id' => $id->id_archivos]);
    }
}
