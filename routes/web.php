<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SenderoController;
use App\Models\Sendero;
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
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    //Rutas para gestionar el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    

});

//Solo si eres admin y estás autenticado
Route::middleware(['auth', 'rol:admin'])->group(function () {
    //Rutas protegidas para admin
    Route::get('/senderos/nuevo', [SenderoController::class, 'create']);
   

});

//Rutas de los senderos sin auth
Route::get('/senderos', [SenderoController::class, 'index']);
Route::get('/senderos/{sendero}', [SenderoController::class, 'show']);

//Ruta solo para mostrar mensajes cuando el rol no coincide
Route::get('/error', function () {
    return view('admin.error');
});

require __DIR__.'/auth.php';
