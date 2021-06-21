<?php

use App\Http\Controllers\CartController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('city', [CartController::class, 'getCity']);
Route::get('district', [CartController::class, 'getDistrict']);
Route::get('cost', [CartController::class, 'getCourier']);
// Route::get('city', 'CartController@getCity');
// Route::get('district', 'CartController@getDistrict');
