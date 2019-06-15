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
    Route::get('/', function () {
        return view('');
    });
});

Route::group(['prefix' => 'andrey'], function () {
    Route::get('/', function () {
        return 'asdasd';
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'customer'], function () {
        Route::group(['middleware' => 'customer'], function () {
            Route::get('delivery_orders', function () {
                return 'delivery_orders';
            })->name('customer.deliveryOrders');

            Route::get('today_orders', function () {
                return 'today_orders';
            })->name('customer.todayOrders');

            Route::get('markets', function () {
                return 'markets';
            })->name('customer.markets');
        });
    });


    Route::group(['prefix' => 'seller'], function () {
        Route::group(['middleware' => 'seller'], function () {
            Route::get('warehouses', function () {
                return 'warehouses';
            })->name('seller.warehouses');

            Route::get('products', function () {
                return 'products';
            })->name('customer.products');

            Route::get('vehicles', function () {
                return 'vehicles';
            })->name('customer.vehicles');

            Route::get('itinerary', function () {
                return 'itinerary';
            })->name('customer.itinerary');

            Route::get('products_in_warehouses', function () {
                return 'productsInWarehouses';
            })->name('customer.productsInWarehouses');

            Route::get('approval_of_deliveries', function () {
                return 'approvalOfDeliveries';
            })->name('customer.approvalOfDeliveries');
        });
    });

});
