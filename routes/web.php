<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\PatientsController;


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

// Route::get('/Loginsametegrity', function () {
//     return view('login');
// });
Route::get('/index', function(){
    return view('index');
})->name('menu');

//Login
Route::get('/',[LoginController::class,'index']);
Route::post('/samein',[LoginController::class,'login'])->name('samein.login');

//Account Module
Route::get('/account',[RegisterControler::class,'index'])->name('accountModule');
Route::resource('/sametegrity',RegisterControler::class);

//Patient Module
Route::get('/patients',[PatientsController::class,'index'])->name('patientModule');
Route::resource('/patients',PatientsController::class);
Route::post('/currentAge',[PatientsController::class,'PatientsController@currentage'])->name('currentAge');





//** esta es la ruta al controlador nuevo */
Route::get('/apitest/{call}',[ApiController::class,'LocationsApi'])->name('apitest');





