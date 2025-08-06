<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\Api\ProfilApiController;
use App\Http\Controllers\Api\BeritaApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('profil', ProfilApiController::class);
    Route::post('profil/{profil}/upload-pdf', [ProfilApiController::class, 'uploadPdf']);
    Route::post('profil/{profil}/upload-gambar', [ProfilApiController::class, 'uploadGambar']);
});

// Public API routes for berita
Route::get('berita', [BeritaApiController::class, 'index']);
Route::get('berita/latest', [BeritaApiController::class, 'latest']);
Route::get('berita/{berita}', [BeritaApiController::class, 'show']);