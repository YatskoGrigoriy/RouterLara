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




Route::resource('/', 'Adm\\MenuController');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'adm'], function () {
        Route::resource('/my','Adm\\AdminController');
        Route::resource('/router','Adm\\NetworkController');
        Route::resource('/sli','Adm\\SliderController');
        Route::resource('/iptv','Adm\\IptvController');
    });

});




