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

Route::group(['middleware' => 'guest'], function() {
    Route::resource('/', 'Login');
});

Route::group(['middleware' => 'user'], function() {
    Route::resource('/home', 'Home');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
});

