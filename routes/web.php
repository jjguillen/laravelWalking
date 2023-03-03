<?php

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SenderoController;
use App\Models\Sendero;
use App\Models\Grupo;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

Route::get('/dashboard', [SenderoController::class , 'indexAdmin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    //Rutas para gestionar el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //Para acceder a los grupos debes estar logeado
    //Rutas a CRUD del Modelo Grupo: index, show, create, edit, store, update, destroy
    Route::resource('grupo', GrupoController::class);
    Route::get('grupo/{grupo}/componentes', [GrupoController::class, 'componentes']);
    Route::get('grupo/{grupo}/borrar', [GrupoController::class, 'destroy']);
    Route::get('grupo/{grupo}/componente/{user}', [GrupoController::class, 'inscribir']);
    Route::get('grupo/{grupo}/componente/{user}/borrar', [GrupoController::class, 'desinscribir']);

    Route::get('senderos/{sendero}/registro', [SenderoController::class, 'registro']);
    Route::post('senderos/{sendero}/registrar', [SenderoController::class, 'registrar']);

    Route::get('realizadas', [SenderoController::class, 'verSenderosRealizados']);

    Route::get('carrito/{grupo}', [GrupoController::class, 'addCarrito']);
});

//Solo si eres admin y estás autenticado
Route::middleware(['auth', 'rol:admin'])->group(function () {
    //Rutas protegidas para admin
    Route::get('/senderos/nuevo', [SenderoController::class, 'create']);
    Route::post('/senderos/store' , [SenderoController::class, 'store']);
});

//Rutas de la WEB -------------------------------------------------------------
Route::get('/senderos', [SenderoController::class, 'index']);
Route::get('/senderos/{sendero}', [SenderoController::class, 'show']);

//-----------------------------------------------------------------------------

//Ruta solo para mostrar mensajes cuando el rol no coincide
Route::get('/error', function () {
    return view('admin.error');
});



require __DIR__.'/auth.php';

