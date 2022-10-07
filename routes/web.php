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
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('signIn');

// menu
Route::view('/index', 'index')->name('menu');

//Account Module
Route::controller(RegisterControler::class)->group(function(){

    Route::get('/accounts_L','index')->name('accountModule');
    Route::get('/account_C','create')->name('accountCreate');
    Route::get('/account_M/{id}','edit')->name('accountEdit');

});
Route::resource('/sametegrity',RegisterControler::class);
//

//Account Module
Route::controller(PatientsController::class)->group(function(){
    Route::get('/patients_L','index')->name('patientModule');
    Route::get('/patient_C','create')->name('patientCreate');
    Route::get('/patient_M/{id}','edit')->name('patientEdit');
});
Route::resource('/patients',PatientsController::class);
//

//** Pruebas */
Route::get('/apitest',  function () {
    return view('patients.test');
})->name('apitest');





