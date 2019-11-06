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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('countries')->group(function (){
    Route::get('/', 'CountryController@index')->name('countries.index');
    Route::get('create', 'CountryController@create')->name('countries.create');
    Route::post('store', 'CountryController@store')->name('countries.store');
    Route::get('{id}/edit', 'CountryController@edit')->name('countries.edit');
    Route::post('{id}/update', 'CountryController@update')->name('countries.update');
    Route::get('{id}/destroy', 'CountryController@destroy')->name('countries.destroy');
    Route::get('search', 'CountryController@search')->name('countries.search');
});
Route::prefix('cities')->group(function (){
    Route::get('/', 'CityController@index')->name('cities.index');
    Route::get('create', 'CityController@create')->name('cities.create');
    Route::post('store', 'CityController@store')->name('cities.store');
    Route::get('{id}/edit', 'CityController@edit')->name('cities.edit');
    Route::post('{id}/update', 'CityController@update')->name('cities.update');
    Route::get('{id}/destroy', 'CityController@destroy')->name('cities.destroy');
    Route::get('search', 'CityController@search')->name('cities.search');
});
