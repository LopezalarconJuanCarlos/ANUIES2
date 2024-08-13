<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;

class TiposController extends Controller
{
    public function tipos(){
        $Tipos = Tipos::all();
        return view ('Tipos.tipos', compact('Tipos'));
    }

    public function detallet($id){
     
        $Tipos= Tipos::find($id);
        return view ("Tipos.detalle")
        ->with(['detalle' => $Tipos]);
    }

    public function editart(Tipos $id)
    {
        $Tipos = Tipos ::all();

        return view("Tipos.editar")
            ->with(['tipos' => $id]);

    }
    public function salvart(Tipos $id, Request $request)
    {
        // dd($request->all());
        $query = Tipos::find($id->id);
        $query->nombre = trim($request->nombre);
        $query->descripcion = trim($request->descripcion);
        $query->save();
        return redirect()->route("tipos", ['id' => $id->id]);
    }
    public function delete(Tipos $id, Request $request)
    {
        $query = Tipos::find($id->id);
        $query -> activo = 0;
        $query -> save();
        return redirect('tipos');
    }



    
    public function añadir(Request $request)
    {

        $rules = [
            'clave' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',

        ];

        $message = [
            'clave.required' => 'Las credenciales son invalidas',
            'nombre.required' => 'Las credenciales son invalidas',
            'descripcion.required' => 'Las credenciales son invalidas',

        ];

        $this->validate($request, $rules, $message);
        

                //dd($request->all());

        Tipos::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'activo' => 1,
        ));

        return redirect('tipos');
    }


}
