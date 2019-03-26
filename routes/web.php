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
    return view('welcome');
});

Route::get('/add_product', function(){
	return view ('add_product');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/my_products', 'ProductsController@index');

Route::resource('product', 'ProductsController');
