<?php

use App\Http\Controllers\CategoryDrugsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\QuestionsController;
use App\Mail\PacienteMailable;
use App\Models\categoryDrugs;
use Illuminate\Support\Facades\Mail;


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


// menu
Route::get('/index', function () {
    return view('index');
})->name('menu');

// Prueba de envio de correos []
// route::get('/confirmacionPaciente', function () {
//     $correo = new PacienteMailable;
//     Mail::to('julianrodriguez19961@gmail.com')->send($correo);
//     return "Mensaje Enviado";
// });

//Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login', 'login')->name('signIn');
    Route::get('/login/out', 'logout')->name('signOut');
});

//Account Module
Route::controller(RegisterControler::class)->group(function () {
    Route::get('/usuarios_L', 'index')->name('user');
    Route::get('/usuario_C', 'create')->name('userCreate');
    Route::post('/usuario_C/Save', 'store')->name('userSave');
    Route::get('/usuario_/{user}', 'show')->name('userShow');
    Route::get('/usuario_M/{user}', 'edit')->name('userEdit');
    Route::put('/usuario_M/{user}', 'update')->name('userUpdate');
    Route::put('/usuario/{user}', 'destroy')->name('userDestroy');
});
Route::resource('/usuario', RegisterControler::class);

//Patient Module
Route::controller(PatientsController::class)->group(function () {
    Route::get('/pacientes_L', 'index')->name('patient');
    Route::get('/paciente_C', 'create')->name('patientCreate');
    Route::post('/paciente_C/Save', 'store')->name('patientSave');
    Route::get('/paciente_/{patient}', 'show')->name('patientShow');
    Route::get('/paciente_M/{patient}', 'edit')->name('patientEdit');
    Route::put('/paciente_M/Update', 'update')->name('patientUpdate');
    Route::delete('/paciente/{patient}', 'destroy')->name('patientDestroy');
});
Route::resource('/patients', PatientsController::class);

//Diagnosis Module
Route::controller(Diagnosiscontroller::class)->group(function () {
    Route::get('/diagnosticos_L', 'index')->name('diagnosis');
    Route::get('/diagnostico_C', 'create')->name('diagnosisCreate');
    Route::post('/diagnostico_C/Save', 'store')->name('diagnosisSave');
    Route::get('/diagnostico_/{diagnosis}', 'show')->name('diagnosisShow');
    Route::get('/diagnostico_M/{diagnosis}', 'edit')->name('diagnosisEdit');
    Route::put('/diagnostico_M/{diagnosis}', 'update')->name('diagnosisUpdate');
    Route::delete('/diagnostico/{diagnosis}', 'destroy')->name('diagnosisDestroy');
});
Route::resource('/Diagnostico', Diagnosiscontroller::class);


Route::controller(HistoriesController::class)->group(function () {
    Route::get('/Historias_L', 'index')->name('histories');
    Route::get('/Historia_C', 'create')->name('historiesCreate');
    Route::post('/Historia_C/Save', 'store')->name('historiesSave');
    Route::get('/Historia_/{historia}', 'show')->name('historiesShow');
    Route::get('/Historia_M/{historia}', 'edit')->name('historiesEdit');
    Route::put('/Historia_M/{Historia}', 'update')->name('historiesUpdate');
    Route::put('/Historia/{Historia}', 'destroy')->name('historiesDestroy');
});

Route::resource('/Historias', HistoriesController::class);


Route::controller(CategoryDrugsController::class)->group(function () {
    Route::get('/CategoriaDrogas_L', 'index')->name('drugscategories');
    Route::get('/CategoriaDrogas_C', 'create')->name('drugscategoriesCreate');
    Route::post('/CategoriaDrogas_C/Save', 'store')->name('drugscategoriesSave');
    Route::get('/CategoriaDrogas_/{categoryDrugs}', 'show')->name('drugscategoriesShow');
    Route::get('/CategoriaDrogas_M/{categoryDrugs}', 'edit')->name('drugscategoriesEdit');
    Route::put('/CategoriaDrogas_M/{categoryDrugs}', 'update')->name('drugscategoriesUpdate');
    Route::delete('/CategoriaDrogas_/{categoryDrugs}', 'destroy')->name('drugscategoriesDestroy');
});


Route::controller(QuestionsController::class)->group(function () {
    Route::get('/PreguntasMaestra_L', 'index')->name('questions');
    Route::get('/PreguntasMaestra_C', 'create')->name('questionsCreate');
    Route::post('/PreguntasMaestra_C/Guardando', 'store')->name('questionsSave');
    Route::get('/PreguntasMaestra_/{questions}', 'show')->name('questionsShow');
    Route::get('/PreguntasMaestra_M/{questions}', 'edit')->name('questionsEdit');
    Route::put('/PreguntasMaestra_M/{questions}', 'update')->name('questionsUpdate');
    Route::delete('/PreguntasMaestra_/1', 'index')->name('questionsDestroy');
});


Route::get('/formatos_', function () {
    return view('forms.Assist');
})->name('AssistCreate');

// Pruebas 
Route::get('/formatos', function () {
    $categoriesDrugs = categoryDrugs::all()->where('z_xOne');
    return view('forms.Assist');
})->name('Assist');
