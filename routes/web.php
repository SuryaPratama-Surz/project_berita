<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route Pengguna

Route::resource('pengguna', App\Http\Controllers\PenggunasController::class);

//Route Kategori

Route::resource('kategori', App\Http\Controllers\KategorisController::class);

//Route Artikel
Route::resource('artikel', App\Http\Controllers\ArtikelsController::class);


//Route Admin
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin');

Route::get('/', [FrontController::class, 'index']);