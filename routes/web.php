<?php

use Illuminate\Support\Facades\Route;
/* Añadir direcciones de controladores aquí */
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Auth;
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

/* ================ Castellano ================  */

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

/* rutas para frontend mercadillo */
Route::get('/mercadillo', [VentaController::class, 'mercadillo']);
Route::get('/mercadilloShow/{ventasMercadillo}', [VentaController::class, 'mercadilloShow'])->name('mercadilloShow');


/* rutas para frontend noticias */
Route::get('/noticias', [NoticiaController::class, 'noticia']);
Route::get('/noticiaShow/{noticiasUsuarios}', [NoticiaController::class, 'noticiaShow'])->name('noticiaShow');

Route::get('/noticias', function () {
    return view('news');
});
Route::get('/webcams', function () {
    return view('webcams');
});
/* ================ Valenciano ================  */
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

/* rutas para frontend mercadillo */
/*Route::get('/mercadillo', [VentaController::class, 'mercadillo']);
Route::get('/mercadilloShow/{ventasMercadillo}', [VentaController::class, 'mercadilloShow'])->name('mercadilloShow');*/

Route::get('/val/mercadillo', function () {
    return view('/Val/Market');
});
Route::get('/val/noticies', function () {
    return view('/Val/news');
});
Route::get('/val/webcams', function () {
    return view('/Val/webcams');
});



/* ================  ruta para ckeditor  ================ */
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

/* ================  ruta para login  ================ */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*  ================ Grupo de rutas permitidas solo para administradores ================  */
Route::group(['middleware' => 'admin'], function () {

    /*ruta al archivo controlador de users y a su página*/
    Route::resource('users', UserController::class);
    Route::get('users', [UserController::class, 'index']);

    /* ruta de home para administradores */
    Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /* ruta a la página de configuración */
    Route::resource('configs', ConfigController::class);
    
});
/* Cambio de contraseña */
Route::resource('userConf', ChangeController::class)->middleware('auth');
Route::get('/editUser/{user}', [ChangeController::class, 'editUser'])->name('editUser')->middleware('auth');

/* ================ rutas para editores ================ */

/* ruta para mercadillo */
Route::resource('ventas', VentaController::class)->middleware('auth');
/*
Se agrega ->middleware('auth'); para restringir el acceso solo a usuarios registrados,
en este caso editores.
*/
/* rutas para los mensajes de contacto */
Route::resource('contacts', ContactController::class)->middleware('auth');

/* ruta para las noticias */
Route::resource('noticias', NoticiaController::class)->middleware('auth');