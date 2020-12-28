<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('phim','APIPhimController');
Route::apiResource('taikhoan','API\TaiKhoanController');
Route::apiResource('ghe','API\GheController');
Route::apiResource('lichchieu','API\LichChieuController');
Route::apiResource('ve','API\VeController');
Route::apiResource('dsve','API\DsVeController');