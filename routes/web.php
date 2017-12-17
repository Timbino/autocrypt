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
    return view('auth/login');
});

Auth::routes();

Route::namespace('Admin')->group(function () {

});

Route::get('/', 'CoinController@getCoin', function () {
    return view('layouts/home');
})->middleware('auth');

Route::get('/coin/{id}', 'CoinController@showCoin', function(){
    return view('layouts/home');
});