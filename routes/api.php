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

Route::get('/users/{userId}/workouts', 'WorkoutsController@index');
Route::post('/users/{userId}/workouts', 'WorkoutsController@store');
Route::put('/users/{userId}/workouts/{workoutId}', 'WorkoutsController@update');
Route::delete('/users/{userId}/workouts/{workoutId}', 'WorkoutsController@destroy');
