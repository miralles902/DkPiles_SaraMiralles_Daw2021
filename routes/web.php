<?php

use Illuminate\Support\Facades\Route;
/* Añadir direcciones de controladores aquí */
use App\Http\Controllers\UsuarioController; 

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

Route::get('/', function () {
    return view('index');
});
Route::resource('usuarios', UsuarioController::class);
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('config');
Route::get('/config', function () {
    return view('configuracion/config');
});
/*Route::resource('empleo', EmpleoController::class);
Route::get('empleo', [EmpleoController::class, 'index']);
Route::resource('user', UserController::class);
Route::get('user', [UserController::class, 'index']);*/
