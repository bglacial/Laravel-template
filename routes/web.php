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
    return view('home');
});
Auth::routes();

Route::resource('kart', 'KartController');
Route::resource('pilot', 'PilotController');
Route::resource('race', 'RaceController');
Route::resource('relay', 'RelayController');

Route::get('/home', 'HomeController@index')->name('home');
