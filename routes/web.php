<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/login', action:'App\Http\Controllers\LoginController@index');