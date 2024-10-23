<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\WeatherController@index')->name('weather');
Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news');


