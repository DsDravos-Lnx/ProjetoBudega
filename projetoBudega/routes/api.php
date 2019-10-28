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

Route::namespace('Api')->name('api.')->group(function(){
    
    Route::prefix('admins')->group(function(){
        Route::get('/', 'AdminController@index')->name('index_admins');
        Route::get('/{id}', 'AdminController@show')->name('single_admins');
        Route::post('/', 'AdminController@store')->name('store_admins');
        Route::put('/{id}', 'AdminController@update')->name('update_admins');
        Route::delete('/{id}', 'AdminController@delete')->name('delete_admins');
    });
});
