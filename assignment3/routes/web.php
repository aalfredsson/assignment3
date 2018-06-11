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

Route::resource('/products', 'ProductController');
Route::resource('/reviews', 'ReviewController');
Route::resource('/stores', 'StoreController');
Route::get('/reviews/create/{id}', 'ReviewController@create');
Route::post('/reviews/{id}', 'ReviewController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
