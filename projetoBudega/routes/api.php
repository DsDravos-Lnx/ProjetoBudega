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

Route::namespace ('Api')->name('api.')->group(function () {

	Route::prefix('admins')->group(function () {
		Route::get('/', 'AdminController@index')->name('index_admins');
		Route::get('/{id}', 'AdminController@show')->name('single_admins');
		Route::post('/', 'AdminController@store')->name('store_admins');
		Route::put('/{id}', 'AdminController@update')->name('update_admins');
		Route::delete('/{id}', 'AdminController@delete')->name('delete_admins');
	});

	Route::prefix('clients')->group(function () {
		Route::get('/', 'ClientController@index')->name('index_clients');
		Route::get('/{id}', 'ClientController@show')->name('single_clients');
		Route::post('/', 'ClientController@store')->name('store_clients');
		Route::put('/{id}', 'ClientController@update')->name('update_clients');
		Route::delete('/{id}', 'ClientController@delete')->name('delete_clients');
	});

	Route::prefix('products')->group(function () {
		Route::get('/', 'ProductController@index')->name('index_products');
		Route::get('/{id}', 'ProductController@show')->name('single_products');
		Route::post('/', 'ProductController@store')->name('store_products');
		Route::put('/{id}', 'ProductController@update')->name('update_products');
		Route::delete('/{id}', 'ProductController@delete')->name('delete_products');
	});

	Route::prefix('purshases')->group(function () {
		Route::get('/', 'PurshaseController@index')->name('index_purshases');
		Route::get('/{id}', 'PurshaseController@show')->name('single_purshases');
		Route::post('/', 'PurshaseController@store')->name('store_purshases');
		Route::put('/{id}', 'PurshaseController@update')->name('update_purshases');
		Route::delete('/{id}', 'PurshaseController@delete')->name('delete_purshases');
	});

	Route::prefix('stocks')->group(function () {
		Route::get('/', 'StockController@index')->name('index_stocks');
		Route::get('/{id}', 'StockController@show')->name('single_stocks');
		Route::post('/', 'StockController@store')->name('store_stocks');
		Route::put('/{id}', 'StockController@update')->name('update_stocks');
		Route::delete('/{id}', 'StockController@delete')->name('delete_stocks');
	});

	Route::prefix('crediteds')->group(function () {
		Route::get('/', 'CreditedPayController@index')->name('index_crediteds');
		Route::get('/{id}', 'CreditedPayController@show')->name('single_crediteds');
		Route::post('/', 'CreditedPayController@store')->name('store_crediteds');
		Route::put('/{id}', 'CreditedPayController@update')->name('update_crediteds');
		Route::delete('/{id}', 'CreditedPayController@delete')->name('delete_crediteds');
	});

	Route::prefix('Suppliers')->group(function () {
		Route::get('/', 'SupplierController@index')->name('index_Suppliers');
		Route::get('/{id}', 'SupplierController@show')->name('single_Suppliers');
		Route::post('/', 'SupplierController@store')->name('store_Suppliers');
		Route::put('/{id}', 'SupplierController@update')->name('update_Suppliers');
		Route::delete('/{id}', 'SupplierController@delete')->name('delete_Suppliers');
	});

});
