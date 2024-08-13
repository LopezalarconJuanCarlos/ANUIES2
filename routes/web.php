    <?php

use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\DirectorioController;
use App\Models\Imagenes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Models\Archivos;
use App\Models\Universidades;
use App\Http\Controllers\UniversidadesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::name('directorio')->get('directorio', function () {
    return view('directorio');
});

Route::name('directorios')->get('directorios', function () {
    return view('inicios.directorios');
});

//-----------------------------------Sesiones-------------------------------------
Route::name('login')->get('login', function () {
    return view('sesiones/login');
});
Route::name('valida')->post('valida', [Login::class, 'valida']);
Route::name('logout')->get('logout', [Login::class, 'logout']);
Route::name('EditarPerfil')->get('EditarPerfil',[Login::class, 'editView']);
Route::name('EditPerfil')->put('EditPerfil/{id}', [Login::class, 'edit']);

    

//----------------------------------------USUARIOS------------------------------
Route::name('inicio')->get('inicio',  [UsuariosController::class, 'inicio']);
Route::name('usuarios')->get('usuarios',  [UsuariosController::class, 'usuarios']);
Route::name('salvar')->put('salvar/{id}',[UsuariosController::class, 'salvar']);
Route::name('eliminar')->put('eliminar/{id}',[UsuariosController::class, 'eliminar']);
Route::name('agregar')->post('agregar',[UsuariosController::class, 'agregar']);
Route::name('perfil')->get('perfil',[UsuariosController::class, 'perfil']);


//------------------------------------Tipos----------------------------------------
Route::name('indext')->get('iniciot',  [TiposController::class, 'indext']);
Route::name('tipos')->get('tipos',  [TiposController::class, 'tipos']);
Route::name('editart')->get('editart/{id}',[TiposController::class, 'editart']);
Route::name('salvart')->put('salvart/{id}',[TiposController::class, 'salvart']);
Route::name('delete')->put('delete/{id}',[TiposController::class, 'delete']);
Route::name('añadir')->post('añadir',[TiposController::class, 'añadir']);


//----------------------------------------Informacion--------------------
Route::name('index')->get('/',  [InformacionController::class, 'index']);
Route::name('inicios')->get('inicios',  [InformacionController::class, 'inicios']);
Route::name('informacion')->get('informacion',  [InformacionController::class, 'informacion']);
Route::name('añadirinfo')->post('añadirinfo',[InformacionController::class, 'añadirinfo']);
Route::name('guardar')->put('guardar/{id}',[InformacionController::class, 'guardar']);
Route::name('eliminarinfor')->put('eliminarinfor/{id}',[InformacionController::class, 'eliminarinfor']);
Route::name('noticia')->get('noticia/{id}',[InformacionController::class, 'noticia']);
Route::name('noticias')->get('noticias/{id}',[InformacionController::class, 'noticias']);
Route::name('image')->get('image/{id}',[InformacionController::class, 'image']);
Route::name('archi')->get('archi/{id}',[InformacionController::class, 'archi']);


//-----------------------------------------Imagenes-----------------------------------
Route::name('imagen')->get('imagen',  [ImagenesController::class, 'imagen']);
Route::name('salvarimagen')->put('salvarimagen/{id}',[ImagenesController::class, 'salvarimagen']);
Route::name('eliminarimagen')->put('eliminarimagen/{id}',[ImagenesController::class, 'eliminarimagen']);
Route::name('agregarimagen')->post('agregarimagen',[ImagenesController::class, 'agregarimagen']);




//-----------------------------------Archivos----------------------------------------
Route::name('archivos')->get('archivos',  [ArchivosController::class, 'archivos']);
Route::name('agregararchivo')->post('agregararchivo',[ArchivosController::class, 'agregararchivo']);
Route::name('salvararchivo')->put('salvararchivo/{id}',[ArchivosController::class, 'salvararchivo']);



//----------------------------------Directorio----------------------------------------
Route::name('directorio')->get('directorio',  [DirectorioController::class, 'directorio']);
Route::name('iniciodirectorio')->get('iniciodirectorio',  [DirectorioController::class, 'iniciodirectorio']);
Route::name('añadirdirectivo')->post('añadirdirectivo',[DirectorioController::class, 'añadirdirectivo']);
Route::name('salvardirectorio')->put('salvardirectorio/{id}',[DirectorioController::class, 'salvardirectorio']);
Route::name('eliminardirectorio')->put('eliminardirectorio/{id}',[DirectorioController::class, 'eliminarDirectorio']);
Route::name('directorios')->get('directorios',  [DirectorioController::class, 'directorios']);

//universidades------------------------------

Route::name('agregaruniversidad')->post('agregaruniversidad',[UniversidadesController::class, 'agregaruniversidad']);


