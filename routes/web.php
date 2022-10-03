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


//Login
Route::get('/',[LoginController::class,'index'])->name('login');;
Route::post('/login',[LoginController::class,'login'])->name('signIn');

// menu
Route::get('/index', function(){
    return view('index');
})->name('menu');

//Account Module
Route::get('/account',[RegisterControler::class,'index'])->name('accountModule');
Route::resource('/sametegrity',RegisterControler::class);

//Patient Module
Route::get('/patients_L',[PatientsController::class,'index'])->name('patientModule');
Route::resource('/patients',PatientsController::class);

// Route::get('/patients/create/{edad}',[PatientsController::class,'test'])->name('currentAge');

// Route::get('/patients/create/{edad?}',function ($edad = '0'){
//     return dd('edad: ' . $edad);
// });


//** esta es la ruta al controlador nuevo */
Route::get('/apitest',[ApiController::class,'calllocations'])->name('apitest');





