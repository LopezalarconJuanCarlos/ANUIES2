<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use App\Models\Informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
   
    public function index(){
        $informacion = \DB::select('SELECT tb_informacion.titulo AS titulo,
               tb_informacion.informacion AS informacion,
               MAX(tb_imagenes.nombre) AS nombre,
               tb_informacion.fi_publicacion AS fecha,
               tb_informacion.id_informacion AS id 
        FROM tb_informacion
        INNER JOIN tb_imagenes ON tb_informacion.id_informacion = tb_imagenes.id_informacion
        WHERE tb_informacion.activo = 1 AND tb_informacion.activobanner = 0
        GROUP BY tb_informacion.titulo, tb_informacion.informacion, tb_informacion.fi_publicacion, tb_informacion.id_informacion;
        ');
        foreach ($informacion as $card) {
            $card->informacion = $this->limitCharacters($card->informacion, 350);
        }
        
            $imagenes=\DB::select('SELECT tb_informacion.id_informacion, tb_informacion.titulo, tb_informacion.informacion, tb_imagenes.nombre AS nom
    FROM tb_informacion
    INNER JOIN tb_imagenes ON tb_informacion.id_informacion = tb_imagenes.id_informacion
    WHERE activobanner = 1
    GROUP BY tb_informacion.id_informacion, tb_informacion.titulo, tb_informacion.informacion, tb_imagenes.nombre');
  
        return view('anuies', compact('imagenes'), compact('informacion'));
       
    }

    private function limitCharacters($text, $limit) {
        if (mb_strlen($text) > $limit) {
            $limitedText = mb_substr($text, 0, $limit);
            $text = $limitedText . '...';
        }
        return $text;
    }
     public function informacion(){
        $informacion = Informacion::all();
        return view ('Informacion.informacion', compact('informacion'));
    }


   
    public function borrari(Informacion $id, Request $request)
    {
        $query = Informacion::find($id->id_informacion);
        $query -> activo = 0;
        $query -> save();
        return redirect('informacion');
    }
    

    public function añadirinfo(Request $request)
    {

               // dd($request->all());

        Informacion::create(array(
            'titulo' => $request->input('titulo'),
            'informacion' => $request->input('informacion'),
            'fi_publicacion' => $request->input('fi_publicacion'),
            'ff_publicacion' => $request->input('ff_publicacion'),
            'activobanner' => 1,            
            'activo' => 1,
          
        ));

        return redirect('informacion');
    }



    public function guardar(Informacion $id, Request $request)
    {
         $query = Informacion::find($id->id_informacion);

        

        //dd($foto2);
    
        $activo = 1;

        if ($request->input('activo') == '') {
            $activo = 0;
        } else if ($request->input('activo') == 'ON') {
            $activo = 1;
        }
        
        $activobanner = 0;

        if ($request->input('activobanner') == '') {
            $activo = 1;
        } else if ($request->input('activobanner') == 'ON') {
            $activo = 0;
        }
        //dd($request->all());
        $query = Informacion::find($id->id_usuario);
        $query->titulo = trim($request->titulo);
        $query->informacion = trim($request->informacion);
        $query->fi_informacion = $request->fi_informacion;
        $query->ff_informacion = $request->ff_informacion;

        $query->save();
        return redirect()->route("informacion", ['id' => $id->id_informacion]);
    }

    public function eliminarinfor(Informacion $id, Request $request)
    {
        $query = Informacion::find($id->id_informacion);
    $query -> activo = 0;
        $query -> save();
        return redirect('informacion');
    }

    public function noticia($id)
    {
        $noticia = Informacion::find($id);
        $imagenes = Imagenes::find($id);
        return view("noticias")
            ->with(['detalle' => $noticia])
            ->with(['detalles' => $imagenes]);
    }

    public function inicios(){
        $informacion = \DB::select('        SELECT tb_informacion.titulo AS titulo,
               tb_informacion.informacion AS informacion,
               MAX(tb_imagenes.nombre) AS nombre,
               tb_informacion.fi_publicacion AS fecha,
               tb_informacion.id_informacion AS id 
        FROM tb_informacion
        INNER JOIN tb_imagenes ON tb_informacion.id_informacion = tb_imagenes.id_informacion
        WHERE tb_informacion.activo = 1 AND tb_informacion.activobanner = 0
        GROUP BY tb_informacion.titulo, tb_informacion.informacion, tb_informacion.fi_publicacion, tb_informacion.id_informacion;
        ');
        foreach ($informacion as $card) {
            $card->informacion = $this->limitCharacters($card->informacion, 500);
        }
        
            $imagenes=\DB::select('SELECT tb_informacion.id_informacion, tb_informacion.titulo, tb_informacion.informacion, tb_imagenes.nombre AS nom
    FROM tb_informacion
    INNER JOIN tb_imagenes ON tb_informacion.id_informacion = tb_imagenes.id_informacion
    WHERE activobanner = 1
    GROUP BY tb_informacion.id_informacion, tb_informacion.titulo, tb_informacion.informacion, tb_imagenes.nombre');
        return view('inicios.inicios', compact('imagenes'), compact('informacion'));
       
    }
    public function noticias($id)
    {
        $noticia = Informacion::find($id);
        $imagenes = Imagenes::find($id);
        return view("inicios.noticiasin")
            ->with(['detalle' => $noticia])
            ->with(['detalles' => $imagenes]);
    }

    public function image($id)
    {
        $informacion = Imagenes::find($id);
        $imagenes = Informacion::find($id);

       //    dd($noticia);
        return view("inicios.image")
        ->with(['detalles' => $imagenes])
        ->with(['detalles' => $informacion]);
    }

    public function archi($id)
    {
        $noticia = Informacion::find($id);
        $imagenes = Imagenes::find($id);
        return view("inicios.archivos")
            ->with(['detalles' => $imagenes]);
    }
}

