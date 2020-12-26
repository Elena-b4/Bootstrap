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
Route::get('/shops', 'ShopsController@index')->name('shops.index');
Route::get('/shops/store', 'ShopsController@store')->name('shops.store');
Route::get('/shops/create', 'ShopsController@create');
Route::get('/shops/edit/{shop}', 'ShopsController@edit')->name('shops.edit');
Route::get('/shops/show/{shop}', 'ShopsController@show')->name('shops.show');
Route::get('/shops/update/{shop}', 'ShopsController@update')->name('shops.update');
Route::get('/shops/delete/{shop}', 'ShopsController@destroy')->name('shops.delete');


Route::get('/algaes', 'AlgaesController@index')->name('algaes.index');
Route::get('/algaes/store', 'AlgaesController@store')->name('algaes.store');
Route::get('/algaes/create', 'AlgaesController@create');
Route::get('/algaes/edit/{algae}', 'AlgaesController@edit')->name('algaes.edit');
Route::get('/algaes/show/{algae}', 'AlgaesController@show')->name('algaes.show');
Route::get('/algaes/update/{algae}', 'AlgaesController@update')->name('algaes.update');
Route::get('/algaes/delete/{algae}', 'AlgaesController@destroy')->name('algaes.delete');


Route::get('/bakes', 'BakesController@index')->name('bakes.index');
Route::get('/bakes/store', 'BakesController@store')->name('bakes.store');
Route::get('/bakes/create', 'BakesController@create');
Route::get('/bakes/edit/{bake}', 'BakesController@edit')->name('bakes.edit');
Route::get('/bakes/show/{bake}', 'BakesController@show')->name('bakes.show');
Route::get('/bakes/update/{bake}', 'BakesController@update')->name('bakes.update');
Route::get('/bakes/delete/{bake}', 'BakesController@destroy')->name('bakes.delete');


Route::get('/river_fishes', 'RiverFishesController@index')->name('riverFishes.index');
Route::get('/river_fishes/store', 'RiverFishesController@store')->name('riverFishes.store');
Route::get('/river_fishes/create', 'RiverFishesController@create');
Route::get('/river_fishes/edit/{riverFish}', 'RiverFishesController@edit')->name('riverFishes.edit');
Route::get('/river_fishes/show/{riverFish}', 'RiverFishesController@show')->name('riverFishes.show');
Route::get('/river_fishes/update/{riverFish}', 'RiverFishesController@update')->name('riverFishes.update');
Route::get('/river_fishes/delete/{riverFish}', 'RiverFishesController@destroy')->name('riverFishes.delete');


Route::get('/sea_fishes', 'SeaFishesController@index')->name('seaFishes.index');
Route::get('/sea_fishes/store', 'SeaFishesController@store')->name('seaFishes.store');
Route::get('/sea_fishes/create', 'SeaFishesController@create');
Route::get('/sea_fishes/edit/{seaFish}', 'SeaFishesController@edit')->name('seaFishes.edit');
Route::get('/sea_fishes/show/{seaFish}', 'SeaFishesController@show')->name('seaFishes.show');
Route::get('/sea_fishes/update/{seaFish}', 'SeaFishesController@update')->name('seaFishes.update');
Route::get('/sea_fishes/delete/{seaFish}', 'SeaFishesController@destroy')->name('seaFishes.delete');


Route::get('/seafoods', 'SeafoodsController@index')->name('seafoods.index');
Route::get('/seafoods/store', 'SeafoodsController@store')->name('seafoods.store');
Route::get('/seafoods/create', 'SeafoodsController@create');
Route::get('/seafoods/edit/{seafood}', 'SeafoodsController@edit')->name('seafoods.edit');
Route::get('/seafoods/show/{seafood}', 'SeafoodsController@show')->name('seafoods.show');
Route::get('/seafoods/update/{seafood}', 'SeafoodsController@update')->name('seafoods.update');
Route::get('/seafoods/delete/{seafood}', 'SeafoodsController@destroy')->name('seafoods.delete');


Route::get('/', function () {
    return view('welcome');
});
