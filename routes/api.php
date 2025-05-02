<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtikelController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth.sanctum')->get('/user' , function (Request $request){
    return $request->user();
});

Route::get('getArtikel' , [ArtikelController::class, 'getArtikel'])->name('getArtikel');
Route::post('getArtikelpost' , [ArtikelController::class, 'store'])->name('getArtikelpost');
