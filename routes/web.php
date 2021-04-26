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

/*paginas web principal (index)*/
Route::get('/', function () {
    return view('index');
});

/*paginas web principales*/
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

/*página web principal valenciano*/
Route::get('/val', function () {
    return view('/Val/index');
});
/*paginas web principales valenciano*/
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

/*ruta al archivo controlador de usuarios y a su página*/
Route::resource('usuarios', UsuarioController::class);
Route::get('usuarios', [UsuarioController::class, 'index']);

/* ruta a la página de configuración */
Route::get('/config', function () {
    return view('configuracion/config');
});