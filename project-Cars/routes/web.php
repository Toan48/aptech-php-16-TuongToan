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

Route::get('/cars/create', 'cars_controller@create')->name('cars.create');
Route::post('/cars/store','cars_controller@store')->name('car.store');
Route::get('/cars/index', 'cars_controller@index' )->name('car.index');
Route::get('/cars/{id}', 'cars_controller@show')->name('car.show');
Route::get('/categories/create', 'categories_controller@create')->name('categories.create');
Route::post('/categories/store', 'categories_controller@store')->name('categories.store');

 


