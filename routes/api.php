<?php

use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::post('/persegi', [App\Http\Controllers\Api\PersegiController::class, 'hitungPersegi']);
Route::post('/persegi-panjang', [App\Http\Controllers\Api\PersegiPanjangController::class, 'hitungPersegiPanjang']);
Route::post('/keliling-persegi-panjang', [App\Http\Controllers\Api\KelilingPersegiPanjangController::class, 'hitungKelilingPersegiPanjang']);
Route::post('/segitiga', [App\Http\Controllers\Api\SegitigaController::class, 'hitungSegitiga']);
Route::post('/keliling-segitiga', [App\Http\Controllers\Api\KelilingSegitigaController::class, 'hitungKelilingSegitiga']);
Route::post('/lingkaran', [App\Http\Controllers\Api\LingkaranController::class, 'hitungLingkaran']);
Route::post('/keliling-lingkaran', [App\Http\Controllers\Api\KelilingLingkaranController::class, 'hitungKelilingLingkaran']);
Route::post('/volume-kubus', [App\Http\Controllers\Api\VolumeKubusController::class, 'hitungVolumeKubus']);
Route::post('/luas-permukaan-kubus', [App\Http\Controllers\Api\LuasPermukaanKubusController::class, 'hitungLuasPermukaanKubus']);
