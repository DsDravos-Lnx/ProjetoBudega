<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/test', function () {
	return view('teste');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/products', function(){
        return view('products');
    });
    
    Route::get('/clients', function(){
        return view('clients');
    })->name('clients');
    
    Route::get('/suppliers', function(){
        return view('suppliers');
    });
    
    Route::get('/debtors', function(){
        return view('debtors');
    });
});



Route::get('/register_user', function(){
    return view('userRegister');
})->name('userRegister');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    return redirect()->route('login');
});