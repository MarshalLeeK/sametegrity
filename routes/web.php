<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControler;

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
})->name('returnMenu');

Route::get('/',[LoginController::class,'index']);
Route::post('/samein',[LoginController::class,'login'])->name('samein.login');




Route::resource('/sametegrity',RegisterControler::class);

