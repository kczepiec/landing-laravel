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

header('Access-Control-Allow-Origin: http://landing.krzysztofczepiec.pl');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('clients', 'ClientController@index');
 
// Route::get('clients/{client}', 'ClientController@show');
 
Route::group(['middleware' => 'cors'], function(){
    Route::post('clients','ClientController@store');
});

// Route::put('clients/{client}','ClientController@update');
 
// Route::delete('clients/{client}', 'ClientController@delete');