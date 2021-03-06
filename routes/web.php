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

// Use resourceful controller
Route::resource('laptops','LaptopsController');

Route::get('/getfiltereddata', 'LaptopsController@getfiltereddata');

Route::post('/laptops/{laptop}/prices', 'LaptopPricesController@store');