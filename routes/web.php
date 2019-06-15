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


Route::group(['prefix' => 'jane'], function () {
    Route::get('/stock', function () {
        return view('seller/add_stock');
    });

    Route::get('/product', function () {
        return view('seller/add_product');
    });
});

Route::group(['prefix' => 'andrey'], function () {
    Route::get('/', function () {
        return 'asdasd';
    });
});

Route::get('/home', 'HomeController@index')->name('home');

//---------------загрузка фото на сервер-------------------------------------------------
Route::get('upload',['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('upload',['as' => 'upload_file','uses' => 'UploadController@upload']);
//----------------------------------------------------------------------------------------

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
