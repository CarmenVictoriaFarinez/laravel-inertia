<?php

use Illuminate\Support\Facades\Route;

Route::get('login')->uses('Auth\LoginController@showLoginForm')->middleware('guest');

Route::post('login.attemp')->uses('Auth\LoginController@Login')->middleware('guest');

Route::get('/', 'WelcomeController');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
