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

Route::get('/', function () {
	return view('login');
});

Route::get('/test', function () {
	return view('teste');
});

Route::get('/login', function(){
    return view('login');
});

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

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/register_user', function(){
    return view('userRegister');
})->name('userRegister');