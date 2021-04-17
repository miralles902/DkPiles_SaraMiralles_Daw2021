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
Route::get('/club', function () {
    return view('club');
});
Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/galeria', function () {
    return view('gallery');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/tiempo', function () {
    return view('forecasts');
});
Route::get('/mercadillo', function () {
    return view('market');
});
Route::get('/noticias', function () {
    return view('news');
});
Route::get('/webcams', function () {
    return view('webcams');
});
Route::get('/val', function () {
    return view('/Val/index');
});
Route::get('/val/club', function () {
    return view('/Val/club');
});
Route::get('/val/contacte', function () {
    return view('/Val/contact');
});
Route::get('/val/galeria', function () {
    return view('/Val/gallery');
});
Route::get('/val/login', function () {
    return view('/Val/login');
});
Route::get('/val/temps', function () {
    return view('/Val/forecasts');
});
Route::get('/val/mercadillo', function () {
    return view('/Val/Market');
});
Route::get('/val/noticies', function () {
    return view('/Val/news');
});
Route::get('/val/webcams', function () {
    return view('/Val/webcams');
});
Route::resource('usuarios', UsuarioController::class);
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('/config', function () {
    return view('configuracion/config');
});