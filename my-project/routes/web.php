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

//car
Route::get('cars/create', 'carsController@create')->name('cars.create');
Route::post('cars/store', 'carsController@store')->name('cars.store');
Route::get('cars/show/{id}', 'carsController@show')->name('cars.show');
Route::get('cars/index', 'carsController@index')->name('cars.index');
Route::get('cars/show/', 'carsController@show')->name('cars.show');
Route::get('cars/home', 'carsController@home')->name('cars.home');

//admin
Route::get('admin/index', 'adminController@index')->name('admin.index');
Route::get('admin/createCars', 'adminController@create')->name('admin.createCars');

//categories
Route::get('categories/create', 'categoriesController@create')->name('category.create');
Route::post('categories/store', 'categoriesController@store')->name('category.store');