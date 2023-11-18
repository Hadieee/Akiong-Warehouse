<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

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

Route::controller(ApiController::class)->group(function () {
    Route::get('admin/data/barang','getBarang');
    Route::post('admin/data/barang','createBarang');
    Route::post('admin/data/barang/edit/{id}', 'update');
    Route::post('admin/data/barang/hapus', 'destroy');
    Route::get('manager/data/barang','getBarang');
    });
