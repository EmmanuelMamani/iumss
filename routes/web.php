<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\estudianteController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\tituloController;
use App\Http\Controllers\certificadoController;
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

Route::get('/', function () {return view('login');});
Route::post('/login',[usuarioController::class,'login'])->name('login');
/********************************Estudiante***************************************/
Route::get('/perfil',[estudianteController::class,'perfil'])->name('perfil');
Route::get('/cambiar_info',[estudianteController::class,'cambiar_info'])->name('cambiar_info');
/********************************Titulos******************************************/
Route::get('/registrar_titulo',[tituloController::class,'ver_registrar'])->name('registrar_titulo');
/********************************Certificados*************************************/
Route::get('/registrar_certificado',[certificadoController::class,'ver_registrar'])->name('registrar_certificado');