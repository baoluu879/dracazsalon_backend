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
use App\Http\Controllers\city_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bao', 'city_controller@index');
Route::get('/bao/{CountryCode}', 'city_controller@getting_data_with_countryCode');
