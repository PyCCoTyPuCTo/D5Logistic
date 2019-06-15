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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'customer'], function () {
        Route::group(['middleware' => 'customer'], function () {
            Route::get('/', function () {
                return 'customer';
            });
        });
    });


    Route::group(['prefix' => 'seller'], function () {
        Route::group(['middleware' => 'seller'], function () {
            Route::get('/', function () {
                return 'seller';
            });
        });
    });

});