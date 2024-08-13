<?php

namespace App\Http\Controllers;
use App\Models\Imagenes;
use App\Models\Informacion;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function imagen(){
        $imagenes = Imagenes::all();
        $informacion = \DB::select(' SELECT tb_informacion.id_informacion, tb_informacion.titulo FROM tb_informacion');
        return view ('Imagenes.imagenes', compact('imagenes','informacion'));
    }

    
    public function agregarimagen(Request $request)
    {

        if ($request->file('foto')  !=  '') {
            $file = $request->file('foto');
            $foto1 = $file->getClientOriginalName();
            $dates = date('YmdHis');
            $foto2 = $dates . $foto1;
            \Storage::disk('local')->put($foto2, \File::get($file));
        } else {
            $foto2 = 'sep.png';
        }
               // dd($request->all());

        Imagenes::create(array(
            'nombre' => $request->input('nombre'),
            'foto' => $foto2,
            'id_informacion' => $request->input('id_informacion'),
            'activo' => 1,
        ));

        return redirect('imagen');
    }
    
    public function salvarimagen(Imagenes $id, Request $request)
    {
         $query = Imagenes::find($id->id_usuario);


        //dd($request->all());
        $query = Imagenes::find($id->id_imagen);
        $query->nombre = trim($request->nombre);
        $query->id_informacion = trim($request->id_informacion);

        $query->save();
        return redirect()->route("imagen", ['id' => $id->id_imagen]);
    }

    public function eliminarimagen(Imagenes $id, Request $request)
    {
        $query = Imagenes::find($id->id_imagen);
    $query -> activo = 0;
        $query -> save();
        return redirect('usuarios');
    }
}
