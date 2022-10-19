<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DiagnosisController;

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
Route::controller(LoginController::class)->group(function(){
    Route::get('/','index')->name('login');
    Route::post('/login','login')->name('signIn');
    Route::get('/login/out','logout')->name('signOut');
});

// menu
Route::get('/index',function(){
    return view('index');
})->name('menu');

//Account Module
Route::controller(RegisterControler::class)->group(function(){
    Route::get('/accounts_L','index')->name('accountModule');
    Route::get('/account_C','create')->name('accountCreate');
    Route::get('/account_/{id}','show')->name('accountShow');
    Route::get('/account_M/{id}','edit')->name('accountEdit');

});
Route::resource('/sametegrity',RegisterControler::class);
//

//Account Module
Route::controller(PatientsController::class)->group(function(){
    Route::get('/patients_L','index')->name('patientModule');
    Route::get('/patient_C','create')->name('patientCreate');
    Route::post('/patient_C/Save','store')->name('patientSave');
    Route::get('/patient_/{patient}','show')->name('patientShow');
    Route::get('/patient_M/{patient}','edit')->name('patientEdit');
    Route::put('/patient_M/Update','udapte')->name('patientUpdate');

});
Route::resource('/patients',PatientsController::class);

//Diagnosis Module


Route::controller(Diagnosiscontroller::class)->group(function(){
    Route::get('/diagnosticos_L','index')->name('diagnosis');
    Route::get('/diagnostico_C','create')->name('diagnosisCreate');
    Route::post('/diagnostico_C/Save','store')->name('diagnosisSave');
    Route::get('/diagnostico_/{diagnosis}','show')->name('diagnosisShow');
    Route::get('/diagnostico_M/{diagnosis}','edit')->name('diagnosisEdit');
    Route::put('/diagnostico_M/Update','')->name('diagnosisUpdate');

});



// Route::resource('/diagnostico',Diagnosiscontroller::class);

// Pruebas 
Route::get('/apitest',function(){
    return view( 'patients.test');
})->name('apitest');





