<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/event', [EventController::class, 'index'])->middleware('auth');
Route::get('/event', [EventController::class, 'index'])->middleware('auth');
Route::get('/event/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/event', [EventController::class, 'store'])->middleware('auth');
Route::get('/event/{event}', [EventController::class, 'show'])->middleware('auth');
Route::get('/event/{event}/edit', [EventController::class, 'edit'])->middleware('auth');
Route::put('/event/{event}', [EventController::class, 'update'])->middleware('auth');
Route::delete('/event/{event}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/getpdf/{id}', [EventController::class, 'getpdf'])->middleware('auth');


