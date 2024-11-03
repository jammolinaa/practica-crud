<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\ProgramasController;
use App\Models\Programas;

// use App\Models\Instructores;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::resource('home', UserController::class);
Route::resource('instructores', InstructoresController::class);
Route::resource('programas', ProgramasController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
