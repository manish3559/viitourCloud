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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('homepage', 'HomeController@homepage');

Route::get('index/add/{id}', 'HomeController@create');
Route::get('index/store', 'HomeController@store');
Route::get('user/dashboard', 'HomeController@dashboard');

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');


// index/store

