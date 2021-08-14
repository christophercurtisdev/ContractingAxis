<?php

use App\Http\Controllers\Api\v1\ContractController;
use App\Http\Controllers\Api\v1\PassportAuthController;
use App\Http\Controllers\Api\v1\TeamController;
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


Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::apiResource('contract', ContractController::class)->middleware(['auth:api']);
Route::apiResource('team', TeamController::class)->middleware(['auth:api']);