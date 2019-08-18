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

Route::middleware('auth:api')->group(function () {
    Route::apiResource('borderos','API\BorderoController')
        ->names([
            'index' => 'api.borderos.index',
            'store' => 'api.borderos.store',
            'show' => 'api.borderos.show',
            'update' => 'api.borderos.update',
            'destroy' => 'api.borderos.destroy',
        ]);
});
