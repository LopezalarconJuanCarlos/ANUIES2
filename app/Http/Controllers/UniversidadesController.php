<?php

namespace App\Http\Controllers;

use App\Models\Universidades;
use Illuminate\Http\Request;

class UniversidadesController extends Controller
{
    
    public function agregaruniversidad(Request $request)
    {

        if ($request->file('logo')  !=  '') {
            $file = $request->file('logo');
            $logo1 = $file->getClientOriginalName();
            $dates = date('YmdHis');
            $logo2 = $dates . $logo1;
            \Storage::disk('local')->put($logo2, \File::get($file));
        } else {
            $logo2 = 'sep.png';
        }
               //dd($request->all());

        Universidades::create(array(
            'nombre' => $request->input('nombre'),
            'siglas' => $request->input('siglas'),
            'url' => $request->input('url'),
            'logo   ' => $logo2,

        ));

        return redirect('directorio');
    }
    
}
