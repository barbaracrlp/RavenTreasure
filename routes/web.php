<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})->name('home');

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/designs', 'DesignController@index')->name('designs.index');
