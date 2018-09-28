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

Route::get('/checkin', function () {
    return view('checkin');
});

Route::get('/stock', function () {
    return view('stock');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::resource('product', 'ProductController');
Route::resource('location', 'LocationController');