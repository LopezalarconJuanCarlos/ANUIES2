<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
        public function inicio(){
            $Usuarios = Usuarios::all();
            return view ('usuarios.inicio', compact('Usuarios'));
        }

     public function usuarios(){
            $Usuarios = \DB::select('SELECT tb_usuarios.clave, tb_usuarios.id_usuario,tb_usuarios.nombre,tb_usuarios.app,tb_usuarios.apm,tb_usuarios.gen,tb_usuarios.nombre,
            tb_usuarios.fn,tb_usuarios.activo,tb_usuarios.email,tb_tipos.nombre as nombret ,tb_usuarios.foto FROM tb_usuarios
            JOIN tb_tipos ON tb_usuarios.id_tipo = tb_tipos.id');
        return view ('usuarios.usuarios', compact('Usuarios'));
    }

    


    public function salvar(Usuarios $id, Request $request)
    {
         $query = Usuarios::find($id->id_usuario);

        if ($request->file('foto') != '') {
            $file = $request->file('foto');

            $foto1 = $file->getClientOriginalName();
            $ldate = date('YmdHis');
            $foto2 = $ldate . $foto1;

            \Storage::disk('local')->put($foto2, \File::get($file));
        } else {
            $foto2 = $query-> foto;
        }

        //dd($foto2);
    
        $activo = 1;

        if ($request->input('activo') == '') {
            $activo = 0;
        } else if ($request->input('activo') == 'ON') {
            $activo = 1;
        }
        //dd($request->all());
        $query = Usuarios::find($id->id_usuario);
        $query->nombre = trim($request->nombre);
        $query->app = trim($request->app);
        $query->apm = trim($request->apm);
        $query->fn = $request->fn;
        $query->email = trim($request->email);
        $query->pass = trim($request->pass);
        $query->foto = $foto2;

        $query->save();
        return redirect()->route("usuarios", ['id' => $id->id_usuario]);
    }

    
    public function eliminar(Usuarios $id, Request $request)
    {
        $query = Usuarios::find($id->id_usuario);
    $query -> activo = 0;
        $query -> save();
        return redirect('usuarios');
    }

    public function agregar(Request $request)
    {

        $rules = [
            'clave' => 'required',
            'nombre' => 'required',
            'app' => 'required',
            'apm' => 'required',
            'email' => 'required'
        ];

        $message = [
            'clave.required' => 'Las credenciales son invalidas',
            'nombre.required' => 'Las credenciales son invalidas',
            'app.required' => 'Las credenciales son invalidas',
            'apm.required' => 'Las credenciales son invalidas',
            'email.required' => 'Las credenciales son invalidas'
        ];

        $this->validate($request, $rules, $message);
        
        if ($request->file('foto')  !=  '') {
            $file = $request->file('foto');
            $foto1 = $file->getClientOriginalName();
            $dates = date('YmdHis');
            $foto2 = $dates . $foto1;
            \Storage::disk('local')->put($foto2, \File::get($file));
        } else {
            $foto2 = 'sep.png';
        }

                //dd($request->all());

        Usuarios::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm' => $request->input('apm'),
            'gen' => $request->input('gen'),
            'fn' => $request->input('fn'),
            'foto' => $foto2,
            'email' => $request->input('email'),
            'pass' => "123123", //$request->input('pass'),
            'id_tipo' => $request->input('id_tipo'),
            'activo' => 1,
        ));

        return redirect('usuarios');
    }

    public function perfil()
    {
        return view("usuarios.perfil");
    }

  
}
