<?php

use App\Http\Controllers\SenderoController;
use Illuminate\Support\Facades\Route;
use App\Models\Sendero;

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

Route::get('/senderos', [SenderoController::class, 'index']);
Route::get('/senderos/{sendero}', [SenderoController::class, 'show']);
Route::get('/senderos/delete/{sendero}', [SenderoController::class, 'destroy']);

