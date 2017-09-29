<?php

use Illuminate\Http\Request;
use App\Task;
use App\Http\Resources\Task as TaskResource;
use App\Http\Resources\TaskCollection;
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

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'] , function() {
    Route::get('/tasks', 'TaskController@getTasks')->name('getTasks');
    Route::get('temperature', 'TemperatureController@getTemperature')->name('getTemperature');
});

/* Route::get('/test', function() {
    $task = Task::first();

    return new TaskResource($task);
});

Route::get('/testall', function() {
    $task = Task::all();

    return new TaskCollection($task);
}); */