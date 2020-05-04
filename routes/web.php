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

Route::get('/', 'VehicleClassController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('car', 'CarController', ['only' => ['index', 'show', 'store']]);
Route::resource('class', 'VehicleClassController', ['except' => ['edit', 'update', 'destroy']]);
Route::resource('spec', 'SpecificationController', ['except' => ['edit', 'update', 'destroy']]);
Route::get('car/{spec_id}/create', 'CarController@create')->name('car.create');

Route::get('specs/search','SpecificationController@getSearch');
Route::post('specs/search','SpecificationController@postSearch');

Route::get('admin', 'AdminController');