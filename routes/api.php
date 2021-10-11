<?php

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



Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});

//Route::resource('medical_patient', App\Http\Controllers\MedicalPatientController::class)->only(['index','store','update','show','destroy']);

Route::group(['middleware' => 'jwt.auth'], function ($router) {

    Route::get('medicalPatients', 'App\Http\Controllers\MedicalPatientController@all');
    Route::get('medicalPatients/{id}', 'App\Http\Controllers\MedicalPatientController@get');
    Route::post('medicalPatients/new', 'App\Http\Controllers\MedicalPatientController@new');


});