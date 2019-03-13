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

Route::get('/users', 'createUserController@index')->name('users.index');
Route::get('users/create', 'createUserController@create')->name('users.create');
Route::post('/users', 'createUserController@store')->name('users.store');
Route::get('/users/{id}', 'createUserController@show')->name('users.show');
Route::get('/users/{id}/edit', 'createUserController@edit')->name('users.edit');
Route::put('users/{id}', 'createUserController@update')->name('users.update');
Route::delete('/users/{id}', 'createUserController@destroy')->name('users.destroy');