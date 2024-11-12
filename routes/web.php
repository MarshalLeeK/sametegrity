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
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\ListUploadsController;
use App\Http\Controllers\NoveltyController;
use App\Http\Controllers\PatientGroupsController;
use App\Http\Controllers\UploadFileController;
use App\Models\categoryDrugs;
use App\Models\headquarter;
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
//Rutas usadas para las primeras validaciones de las vistas del iniciode sesion
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login', 'login')->name('signIn');
    Route::get('/login/out', 'logout')->middleware('auth')->name('signOut');
});



//Novelties
//Rutas usadas para la manipulacion de novedades
Route::controller(NoveltyController::class)->group(function () {
    Route::get('novelty/novelty_create', 'create')->name('novelty.novelty_create');
    Route::get('/noveltyList', 'indexNovelty')->name('noveltyList');
    Route::get('/novelty_/{categoryDrugs}', 'show')->name('noveltiesShow');
    Route::get('/novelty_M/{categoryDrugs}', 'edit')->name('noveltiesEdit');

});


//UploadFiles

Route::controller(UploadFileController::class)->group(function () {
    Route::get('Upload/indexUpload', 'getIndexUpload')->name('Upload.indexUpload');
    Route::post('Upload/indexUpload','postIndexUpload')->name('Upload.indexUpload');

});


//Route equivale a la ruta que se usara desde el navegador, continuamente se agrega el controlador y la funcion a llamar y por ultimo damos un nombre a la ruta
Route::get('/dos', [UploadFileController::class,'indexUpload'])->name('dos');
Route::post('/SubirDatos',[UploadFileController::class,'SubirDatos'])->name('FileUpload.indexUpload');
Route::get ('/ListadoArchivos',[ListUploadsController::class,'ListFiles'])->name('ListadoArchivos');


//UploadFiles
//Rutas usadas para la manipulacion de archivos subidos
    Route::controller(UploadFileController::class)->middleware('auth')->group(function () {
    Route::get('/FileUpload_create', 'indexUpload')->name('filesCreate');
    Route::post('FileUpload/Save', 'create')->name('filesSave');
    Route::get('/FileUploadList', 'index')->name('files');
    Route::get('/FileUpload_/{file}', 'show')->name('filesShow');
    Route::get('/FileUpload_M/{file}', 'edit')->name('filesEdit');
    Route::put('/FileUpload_M/{file}', 'update')->name('filesUpdate');
    Route::put('/FileUpload/{file}', 'destroy')->name('filesDestroy');
    //Se crean las rutas para la division por macroprocesos
    Route::get('/MissionaryMacroList', 'listmissionarymacroprocess')->name('filesMissionaryMacro');
    Route::get('/StrategicMacroList', 'liststrategicmacroprocess')->name('filesStrategicMacro');
    Route::get('/SupportMacroList', 'listsupportmacroprocess')->name('filesSupportMacro');
    Route::get('/AssessmentMacroList', 'listassessmentmacroprocess')->name('filesAssessmentMacro');
    //Se crean las rutas que manejan las vistas del macroprocesomisional 
    Route::get('/FileDetails', 'listuploadsdetails')->name('filesDetails');
    Route::get('/FileExternalConsultation', 'listexternalconsultation')->name('filesConsultationExternal');
    Route::get('/FileHospitalization', 'listhospitalization')->name('filesHospitalization');
    Route::get('/FileCAD', 'listcad')->name('filesCad');
    Route::get('/FileServicePharmaceutical', 'listpharmaceuticalservice')->name('filesPharmaceutical');
    //Se crean las rutas que manejan elos submenus del macroproceso de apoyo
    Route::get('/GFinancieraMacroList', 'listgfinanciera')->name('filesSupportFinanciera');
    Route::get('/GInfraestructuraMacroList', 'listinfraestructura')->name('filesSupportInfraestructura');
    Route::get('/TalentoMacroList', 'listtalento')->name('filesSupportTalento');
    Route::get('/GComprasMacroList', 'listcompras')->name('filesSupportCompras');
    Route::get('/SInformacionMacroList', 'listinformacion')->name('filesSupportInformacion');
    Route::get('/GDocumentalMacroList', 'listdocumental')->name('filesSupportDocumental');

});
Route::resource('/FileUpload', RegisterControler::class)->middleware('auth');



//Account Module
//Rutas usadas para la manipulacion de las vistas de los usuarios
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

//Histories Module
Route::controller(HistoriesController::class)->middleware('auth')->group(function () {
    Route::get('/Historias_L', 'index')->name('histories');
    Route::get('/Historia_C', 'create')->name('historiesCreate');
    Route::post('/Historia_C/Save', 'store')->name('historiesSave');
    Route::get('/Historia_/{patient}', 'show')->name('historiesShow');
    Route::get('/Historia_M/{historia}', 'edit')->name('historiesEdit');
    Route::put('/Historia_M/{Historia}', 'update')->name('historiesUpdate');
    Route::put('/Historia/{Historia}', 'destroy')->name('historiesDestroy');
});

Route::resource('/Historias', HistoriesController::class)->middleware('auth');


//Groups
//Rutas usadas para la manipulacion de los grupos
Route::controller(GroupController::class)->group(function () {
    Route::get('/groups_L', 'index')->name('groups');
    Route::get('/groups_C', 'create')->name('groupsCreate');
    Route::post('/groups_C/Save', 'store')->name('groupsSave');
    Route::get('/groups_/{group}', 'show')->name('groupsShow');
    Route::get('/groups_M/{group}', 'edit')->name('groupsEdit');
    Route::put('/groups_M/Update', 'update')->name('groupsUpdate');
    Route::delete('/groups_/{group}', 'destroy')->name('groupsDestroy');

});
Route::resource('/groups', GroupController::class)->middleware('auth');


//Headquaters Modules
//Rutas usadas para la manipulacion de las sedes
Route::controller(HeadquarterController::class)->group(function (){
    Route::get('/headquarter_L', 'index')->name('headquarters');
    Route::get('headquarters_C', 'create')->name('headquartersCreate');
    Route::post('/headquarters_C/Save', 'store')->name('headquartersSave');
    Route::get('/headquarter_/{campus}', 'show')->name('headquartersShow');
    Route::get('/headquarter_M/{campus}/edit', 'edit')->name('headquartersEdit');
    Route::put('/headquarter_M/{campus}', 'update')->name('headquartersUpdate');
    Route::delete('/headquarter_/{campus}', 'destroy')->name('headquartersDestroy');
});
Route::resource('/headquaters', HeadquarterController::class)->middleware('auth');


//PatientsGroups Modules
//Rutas usadas para la manipulacion de las sedes
Route::controller(PatientGroupsController::class)->group(function (){
    Route::get('/patientGroup_L', 'index')->name('patientgroups');
    Route::get('patientGroups_C', 'create')->name('patientgroupsCreate');
    Route::post('/patientGroups_C/Save', 'store')->name('patientgroupsSave');
    Route::get('/patientGroup_/{patient}', 'show')->name('patientgroupsShow');
    Route::get('/patientGroup_M/{patient}/edit', 'edit')->name('patientgroupsEdit');
    Route::put('/patientGroup_M/{patient}', 'update')->name('patientgroupsUpdate');
    Route::delete('/patientGroup_/{patient}', 'destroy')->name('patientgroupsDestroy');
});
Route::resource('/patientGroups', PatientGroupsController::class)->middleware('auth');

//Categorias
//Rutas usadas para la manipulacion de las categorias
Route::controller(CategoryDrugsController::class)->middleware('auth')->group(function () {
    Route::get('/CategoriaDrogas_L', 'index')->name('drugscategories');
    Route::get('/CategoriaDrogas_C', 'create')->name('drugscategoriesCreate');
    Route::post('/CategoriaDrogas_C/Save', 'store')->name('drugscategoriesSave');
    Route::get('/CategoriaDrogas_/{categoryDrugs}', 'show')->name('drugscategoriesShow');
    Route::get('/CategoriaDrogas_M/{categoryDrugs}', 'edit')->name('drugscategoriesEdit');
    Route::put('/CategoriaDrogas_M/{categoryDrugs}', 'update')->name('drugscategoriesUpdate');
    Route::delete('/CategoriaDrogas_/{categoryDrugs}', 'destroy')->name('drugscategoriesDestroy');
});

//Questions Module
Route::controller(QuestionsController::class)->middleware('auth')->group(function () {
    Route::get('/PreguntasMaestra_L', 'index')->name('questions');
    Route::get('/PreguntasMaestra_C', 'create')->name('questionsCreate');
    Route::post('/PreguntasMaestra_C/Guardando...', 'store')->name('questionsSave');
    Route::get('/PreguntasMaestra_/{questions}', 'show')->name('questionsShow');
    Route::get('/PreguntasMaestra_M/{questions}', 'edit')->name('questionsEdit');
    Route::put('/PreguntasMaestra_M/{questions}', 'update')->name('questionsUpdate');
    Route::delete('/PreguntasMaestra_/{questions}', 'destroy')->name('questionsDestroy');
});

//Replies Module
Route::controller(repliesController::class)->middleware('auth')->group(function () {
    Route::get('/RespuestasMaestra_L', 'index')->name('replies');
    Route::get('/RespuestasMaestra_C', 'create')->name('repliesCreate');
    Route::post('/RespuestasMaestra_C/Guardando...', 'store')->name('repliesSave');
    Route::get('/RespuestasMaestra_/{replies}', 'show')->name('repliesShow');
    Route::get('/RespuestasMaestra_M/{replies}', 'edit')->name('repliesEdit');
    Route::put('/RespuestasMaestra_M/{replies}', 'update')->name('repliesUpdate');
    Route::delete('/RespuestasMaestra/{replies}', 'destroy')->name('repliesDestroy');
});


//Forms Module
Route::controller(FormsController::class)->middleware('auth')->group(function () {
    Route::get('/Formulario_L', 'index')->name('forms');
    Route::get('/Formulario_C', 'create')->name('formsCreate');
    Route::post('/Formulario_C/Guardando...', 'store')->name('formsSave');
    Route::get('/Formulario_/{forms}', 'show')->name('formsShow');
    Route::get('/Formulario_M/{forms}', 'edit')->name('formsEdit');
    Route::put('/Formulario_M/{forms}', 'update')->name('formsUpdate');
    Route::delete('/Formulario/{forms}', 'destroy')->name('formsDestroy');
    Route::post('Formulario_C', 'getQuestionList');
});

Route::post('Formular_C', [FormsController::class, 'getAnswerList']);


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
