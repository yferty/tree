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

Route::get('/tree', 'TreeController@all');
Route::get('/tree/{id}', 'TreeController@one');

Route::get('some', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});
