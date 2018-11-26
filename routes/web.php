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
    return view('user.asal');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route untuk Trip
Route::get('/trip', 'TripController@tampil');
Route::get('/add', 'TripController@create');
Route::post('/create', 'TripController@add');


//Route untuk request
Route::get('/request', 'RequestController@request');
Route::post('/formReq', 'RequestController@add');
