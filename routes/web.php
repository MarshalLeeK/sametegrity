<?php

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CategoryDrugsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ApiController;
use App\Models\categoryDrugs;
use Doctrine\DBAL\Driver\Middleware;
use Doctrine\DBAL\Logging\Middleware as LoggingMiddleware;

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


// menu
Route::get('/index', function () {
    return view('index');
})->middleware('auth')->name('menu');

//Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login', 'login')->name('signIn');
    Route::get('/login/out', 'logout')->middleware('auth')->name('signOut');
});


//Account Module
Route::controller(RegisterControler::class)->middleware('auth')->group(function () {
    Route::get('/usuarios_L', 'index')->name('user');
    Route::get('/usuario_C', 'create')->name('userCreate');
    Route::post('/usuario_C/Save', 'store')->name('userSave');
    Route::get('/usuario_/{user}', 'show')->name('userShow');
    Route::get('/usuario_M/{user}', 'edit')->name('userEdit');
    Route::put('/usuario_M/{user}', 'update')->name('userUpdate');
    Route::put('/usuario/{user}', 'destroy')->name('userDestroy');
});
Route::resource('/usuario', RegisterControler::class)->middleware('auth');

//Patient Module
Route::controller(PatientsController::class)->middleware('auth')->group(function () {
    Route::get('/pacientes_L', 'index')->name('patient');
    Route::get('/paciente_C', 'create')->name('patientCreate');
    Route::post('/paciente_C/Save', 'store')->name('patientSave');
    Route::get('/paciente_/{patient}', 'show')->name('patientShow');
    Route::get('/paciente_M/{patient}', 'edit')->name('patientEdit');
    Route::put('/paciente_M/Update', 'update')->name('patientUpdate');
    Route::delete('/paciente/{patient}', 'destroy')->name('patientDestroy');
});
Route::resource('/patients', PatientsController::class)->middleware('auth');

//Diagnosis Module
Route::controller(Diagnosiscontroller::class)->middleware('auth')->group(function () {
    Route::get('/diagnosticos_L', 'index')->name('diagnosis');
    Route::get('/diagnostico_C', 'create')->name('diagnosisCreate');
    Route::post('/diagnostico_C/Save', 'store')->name('diagnosisSave');
    Route::get('/diagnostico_/{diagnosis}', 'show')->name('diagnosisShow');
    Route::get('/diagnostico_M/{diagnosis}', 'edit')->name('diagnosisEdit');
    Route::put('/diagnostico_M/{diagnosis}', 'update')->name('diagnosisUpdate');
    Route::delete('/diagnostico/{diagnosis}', 'destroy')->name('diagnosisDestroy');
});
Route::resource('/Diagnostico', Diagnosiscontroller::class)->middleware('auth');


Route::controller(HistoriesController::class)->middleware('auth')->group(function () {
    Route::get('/Historias_L', 'index')->name('histories');
    Route::get('/Historia_C', 'create')->name('historiesCreate');
    Route::post('/Historia_C/Save', 'store')->name('historiesSave');
    Route::get('/Historia_/{historia}', 'show')->name('historiesShow');
    Route::get('/Historia_M/{historia}', 'edit')->name('historiesEdit');
    Route::put('/Historia_M/{Historia}', 'update')->name('historiesUpdate');
    Route::put('/Historia/{Historia}', 'destroy')->name('historiesDestroy');
});

Route::resource('/Historias', HistoriesController::class)->middleware('auth');


Route::controller(CategoryDrugsController::class)->middleware('auth')->group(function () {
    Route::get('/CategoriaDrogas_L', 'index')->name('drugscategories');
    Route::get('/CategoriaDrogas_C', 'create')->name('drugscategoriesCreate');
    Route::post('/CategoriaDrogas_C/Save', 'store')->name('drugscategoriesSave');
    Route::get('/CategoriaDrogas_/{categoryDrugs}', 'show')->name('drugscategoriesShow');
    Route::get('/CategoriaDrogas_M/{categoryDrugs}', 'edit')->name('drugscategoriesEdit');
    Route::put('/CategoriaDrogas_M/{categoryDrugs}', 'update')->name('drugscategoriesUpdate');
    Route::delete('/CategoriaDrogas_/{categoryDrugs}', 'destroy')->name('drugscategoriesDestroy');
});


Route::controller(QuestionsController::class)->middleware('auth')->group(function () {
    Route::get('/PreguntasMaestra_L', 'index')->name('questions');
    Route::get('/PreguntasMaestra_C', 'create')->name('questionsCreate');
    Route::post('/PreguntasMaestra_C/Guardando...', 'store')->name('questionsSave');
    Route::get('/PreguntasMaestra_/{questions}', 'show')->name('questionsShow');
    Route::get('/PreguntasMaestra_M/{questions}', 'edit')->name('questionsEdit');
    Route::put('/PreguntasMaestra_M/{questions}', 'update')->name('questionsUpdate');
    Route::delete('/PreguntasMaestra_/{questions}', 'destroy')->name('questionsDestroy');
});


Route::controller(repliesController::class)->middleware('auth')->group(function () {
    Route::get('/RespuestasMaestra_L', 'index')->name('replies');
    Route::get('/RespuestasMaestra_C', 'create')->name('repliesCreate');
    Route::post('/RespuestasMaestra_C/Guardando...', 'store')->name('repliesSave');
    Route::get('/RespuestasMaestra_/{replies}', 'show')->name('repliesShow');
    Route::get('/RespuestasMaestra_M/{replies}', 'edit')->name('repliesEdit');
    Route::put('/RespuestasMaestra_M/{replies}', 'update')->name('repliesUpdate');
    Route::delete('/RespuestasMaestra/{replies}', 'destroy')->name('repliesDestroy');
});

Route::controller(FormsController::class)->middleware('auth')->group(function () {
    Route::get('/Formulario_L', 'index')->name('forms');
    Route::get('/Formulario_C', 'create')->name('formsCreate');
    Route::post('Formulario_C', 'getQuestionList');
    Route::post('/Formulario_C/Guardando...', 'store')->name('formsSave');
    Route::get('/Formulario_/{forms}', 'show')->name('formsShow');
    Route::get('/Formulario_M/{forms}', 'edit')->name('formsEdit');
    Route::put('/Formulario_M/{forms}', 'update')->name('formsUpdate');
    Route::delete('/Formulario/{forms}', 'destroy')->name('formsDestroy');
});


Route::get('/formatos_', function () {
    return view('forms.Assist');
})->name('AssistCreate');

// Pruebas 
Route::get('/formatos', function () {
    $categoriesDrugs = categoryDrugs::all()->where('z_xOne');
    return view('forms.Assist');
})->name('Assist');





Route::get('/ajax', function () {
    return view('mensaje');
});

Route::controller(ApiController::class)->group(function () {
    Route::post('/getmsg', 'index');
});

Route::post('getmsgxxxx', [AjaxController::class, 'AccionHeyner']);
Route::post('AccionHeyner', [AjaxController::class, 'AccionHeyner']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
