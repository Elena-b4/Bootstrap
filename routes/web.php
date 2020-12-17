<?php

use Illuminate\Support\Facades\Route;

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


    Route::get('animals', 'AnimalsController@index');
    Route::get('cars', 'CarsController@index');
    Route::get('cars/delete', 'CarsController@destroy');
    Route::get('cars/store', 'CarsController@store');
    Route::get('cars/update', 'CarsController@update');
    Route::get('types', 'TypesController@index');
    Route::get('colors', 'ColorsController@index');

    Route::get('directions', 'DirectionsController@index');
    Route::get('directions/show/{direction}', 'DirectionsController@show');
    Route::get('directions/store', 'DirectionsController@store');
    Route::get('directions/destroy/{direction}', 'DirectionsController@destroy');
    Route::get('directions/update/{direction}', 'DirectionsController@update');

    Route::get('products', 'ProductsController@index');
    Route::get('products/store', 'ProductsController@store');
    Route::get('products/update/{product}', 'ProductsController@update');
    Route::get('products/show/{product}', 'ProductsController@show');
    Route::get('products/destroy/{product}', 'ProductsController@destroy');

    Route::get('places', 'PlacesController@index');
    Route::get('places/store', 'PlacesController@store');
    Route::get('places/update/{place}', 'PlacesController@update');
    Route::get('places/show/{place}', 'PlacesController@show');
    Route::get('places/destroy/{place}', 'PlacesController@destroy');

    Route::get('/', function () {
    return view('welcome');
});

