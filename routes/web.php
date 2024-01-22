<?php

use App\Http\Controllers\ListUploadsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Uno;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/uno', function () {
    return view('uno');
});*/

//Ruta que invoca al modelo Uno y llama a la funcion index
Route::get('/uno', [Uno::class,'index'])->name('index');

//Ruta que invoca al modelo Uno y llama a la funcion crear
Route::get('/crear', [Uno::class,'crear'])->name('crear');

//Ruta que se encarga de enviar los datos para almacenar en la base de datos
Route::post('cursos',[Uno::class,'store'])->name('cursos.store');    

//Ruta que invoca al modelo Uno y llama a la funcion show
Route::get('cursos/{curso}}', [Uno::class,'show'])->name('cursos.show');


// Route::get('cursos/{id}/edit' ,[Uno::class,'edit'])->name('cursos.edit');

Route::get('cursos/{curso}/edit' ,[Uno::class,'edit'])->name('cursos.edit');

//Se crea la ruta para actualizar el registro, se recomienda usar el metodo put en lugar de post para este tipo de acciones
Route::put('cursos/{curso}',[Uno::class,'update'])->name('cursos.update');


//Ruta que invoca al modelo Uno y llama a la funcion indexUpload
//Route equivale a la ruta que se usara desde el navegador, continuamente se agrega el controlador y la funcion a llamar y por ultimo damos un nombre a la ruta
Route::get('/dos', [Uno::class,'indexUpload'])->name('dos');

Route::post('/SubirDatos',[Uno::class,'SubirDatos'])->name('FileUpload.indexUpload');

Route::get ('/ListadoArchivos',[ListUploadsController::class,'ListFiles'])->name('FileUpload.listUploads');