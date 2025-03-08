<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InscriptionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'controller' => InscriptionController::class], function(){
    Route::get('/conferences', 'getConferences');
    Route::post('/inscription', 'inscription');
});