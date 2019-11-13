<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });

Route::namespace ('Api')->name('api.')->group(function () {

	Route::prefix('users')->group(function () {
		Route::post('/register', 'UserController@register')->name('register_user');
		Route::post('/login', 'UserController@login')->name('login_user');
		Route::group(['middleware' => 'auth:api'], function () {
			Route::post('/details', 'UserController@details')->name('details_user');
		});
	});

	Route::prefix('admins')->group(function () {
		Route::get('/', 'AdminController@index')->name('index_admins');
		Route::get('/show/{id}', 'AdminController@show')->name('single_admins');
		Route::post('/create', 'AdminController@store')->name('store_admins');
		Route::put('/edit/{id}', 'AdminController@update')->name('update_admins');
		Route::delete('/delete/{id}', 'AdminController@delete')->name('delete_admins');
	});

	Route::prefix('clients')->group(function () {
		Route::get('/', 'ClientController@index')->name('index_clients');
		Route::get('/show/{id}', 'ClientController@show')->name('single_clients');
		Route::post('/create', 'ClientController@store')->name('store_clients');
		Route::put('/edit/{id}', 'ClientController@update')->name('update_clients');
		Route::delete('/delete/{id}', 'ClientController@delete')->name('delete_clients');
	});

	Route::prefix('products')->group(function () {
		Route::get('/', 'ProductController@index')->name('index_products');
		Route::get('/show/{id}', 'ProductController@show')->name('single_products');
		Route::post('/create', 'ProductController@store')->name('store_products');
		Route::put('/edit/{id}', 'ProductController@update')->name('update_products');
		Route::delete('/delete/{id}', 'ProductController@delete')->name('delete_products');
	});

	Route::prefix('purshases')->group(function () {
		Route::get('/', 'PurshaseController@index')->name('index_purshases');
		Route::get('/show/{id}', 'PurshaseController@show')->name('single_purshases');
		Route::get('/debtors', 'PurshaseController@showDebtors')->name('showDebtors_purshases');
		Route::get('/withoutPay/{id}', 'PurshaseController@showWithoutPay')->name('showWithoutPay_purshases');
		Route::post('/create', 'PurshaseController@store')->name('store_purshases');
		Route::put('/edit/{id}', 'PurshaseController@update')->name('update_purshases');
		Route::delete('/delete/{id}', 'PurshaseController@delete')->name('delete_purshases');

	});

	Route::prefix('stocks')->group(function () {
		Route::get('/', 'StockController@index')->name('index_stocks');
		Route::get('/show/{id}', 'StockController@show')->name('single_stocks');
		Route::post('/create', 'StockController@store')->name('store_stocks');
		Route::put('/edit/{id}', 'StockController@update')->name('update_stocks');
		Route::delete('/delete/{id}', 'StockController@delete')->name('delete_stocks');
	});

	Route::prefix('crediteds')->group(function () {
		Route::get('/', 'CreditedPayController@index')->name('index_crediteds');
		Route::get('/show/{id}', 'CreditedPayController@show')->name('single_crediteds');
		Route::post('/create', 'CreditedPayController@store')->name('store_crediteds');
		Route::put('/edit/{id}', 'CreditedPayController@update')->name('update_crediteds');
		Route::delete('/delete/{id}', 'CreditedPayController@delete')->name('delete_crediteds');
	});

	Route::prefix('Suppliers')->group(function () {
		Route::get('/', 'SupplierController@index')->name('index_Suppliers');
		Route::get('/show/{id}', 'SupplierController@show')->name('single_Suppliers');
		Route::post('/create', 'SupplierController@store')->name('store_Suppliers');
		Route::put('/edit/{id}', 'SupplierController@update')->name('update_Suppliers');
		Route::delete('/delete/{id}', 'SupplierController@delete')->name('delete_Suppliers');
	});

});
