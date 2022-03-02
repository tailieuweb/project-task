<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');

Route::middleware(['auth:api'])->group(function () {

    Route::get('/tasks', 'Foostart\Task\Controllers\User\TaskUserController@index');
    Route::get('/task', 'Foostart\Task\Controllers\User\TaskUserController@view');
    Route::post('/task', 'Foostart\Task\Controllers\User\TaskUserController@mobilePost');
});

