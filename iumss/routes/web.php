<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\estudianteController;
use App\Http\Controllers\usuarioController;
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
/************************************************************************ */
Route::get('/perfil',[estudianteController::class,'perfil'])->name('perfil');

