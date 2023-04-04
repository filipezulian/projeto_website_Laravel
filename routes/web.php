<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contato'])->name('contato');
Route::get('/servicos', [App\Http\Controllers\HomeController::class, 'servicos'])->name('servicos');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
