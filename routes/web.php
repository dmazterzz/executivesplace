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

Route::get('/adduser', 'UserController@create')->name('get.create.users');
Route::post('/adduser', 'UserController@store')->name('post.store.users');
Route::get('/users/convert/{user}', 'UserController@convert');
Route::get('/', 'UserController@show')->name('show.users');
Route::get('/viewuser/{id}', 'UserController@viewuser')->name('view.user');
Route::get('/convertCurrency/{id}', 'UserController@convertCurrency')->name('view.convert');



