<?php

use App\Http\Controllers\API\cekstokController;
use App\Http\Controllers\API\pemesananController;
use App\Http\Controllers\API\updatestokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cekstok/show/{id}', [cekstokController::class, 'show']);
Route::put('cekstok/barang/{kode_barang}', [cekstokController::class, 'update']);



