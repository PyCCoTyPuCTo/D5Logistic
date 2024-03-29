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

    Route::get('/cars', function () {
        return view('seller/cars');
    });

    Route::get('/products', function () {
        return view('seller/products');
    });

    Route::get('/route_for_day', function () {
        return view('seller/route_for_day');
    });

    Route::get('/delivery_approval', function () {
        return view('seller/delivery_approval');
    });

    Route::get('/products_in_warehouse', function () {
        return view('seller/products_in_warehouse');
    });
});

Route::group(['prefix' => 'andrey'], function () {
    Route::get('/stock', function () {
        return view('addStore');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

//---------------загрузка фото на сервер-------------------------------------------------
Route::get('upload', ['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('upload', ['as' => 'upload_file', 'uses' => 'UploadController@upload']);
//----------------------------------------------------------------------------------------

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'customer'], function () {
        Route::group(['middleware' => 'customer'], function () {
            Route::get('delivery_orders', function () {
                return 'delivery_orders';
            })->name('customer.deliveryOrders');

            Route::get('today_orders', function () {
                return 'today_orders';
            })->name('customer.todayOrders');

            Route::get('markets', 'ShopController@shops')->name('customer.markets');

            Route::get('add_market', function () {
                return view('customer.addStore');
            })->name('customer.addMarket');

            Route::get('update_market/{id}', 'ShopController@getUpdatePage')->name('customer.updateMarket');
            Route::post('update_market/{id}', 'ShopController@update')->name('customer.updateMarketPost');


            Route::post('add_market', 'ShopController@create')->name('customer.addMarketPost');
        });
    });


    Route::group(['prefix' => 'seller'], function () {
        Route::group(['middleware' => 'seller'], function () {
            Route::get('warehouses', 'StoragesController@warehouses')->name('seller.warehouses');

            Route::get('add_warehouse', function () {
                return view('seller.addWarehouse');
            })->name('customer.addWarehouse');
            Route::get('update_warehouse/{id}', 'StoragesController@getUpdatePage')->name('customer.updateWarehouse');
            Route::post('update_warehouse/{id}', 'StoragesController@update')->name('customer.updateWarehousePost');
            Route::post('add_warehouse', 'StoragesController@create')->name('customer.addWarehousePost');


            Route::get('products', function () {
                return view('seller.products');
            })->name('customer.products');

            Route::get('vehicles', 'VehicleController@getVehicleList')->name('customer.vehicles');


            Route::get('itinerary', function () {
                return 'itinerary';
            })->name('customer.itinerary');

            Route::get('products_in_warehouses', function () {
                return view('seller.productsInStreg');
            })->name('customer.productsInWarehouses');

            Route::get('approval_of_deliveries', function () {
                return view('seller.orders');
            })->name('customer.approvalOfDeliveries');
        });
    });

});
