<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
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

Route::get('/api/provinces', [RegionController::class, 'getProvinces']);
Route::get('/api/regencies/{province_id}', [RegionController::class, 'getRegencies']);
Route::get('/api/districts/{regency_id}', [RegionController::class, 'getDistricts']);
Route::get('/api/villages/{district_id}', [RegionController::class, 'getVillages']);