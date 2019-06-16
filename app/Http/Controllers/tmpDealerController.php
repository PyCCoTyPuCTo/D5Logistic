<?php

namespace App\Http\Controllers;

use App\Action\Sellers\CreateAction;
use App\Action\Sellers\UpdateAction;
use Illuminate\Http\Request;

class tmpDealerController extends Controller
{
    public function test()
    {
        $seller = new Request();
        $seller['name'] = '123';
        $seller['email'] = '123';
        $seller['password'] = '123';
        $seller['inn'] = '132';
        $seller['geolocation_id'] = 1;
        $seller['type_id'] = 1;
        $seller['phone'] = '000';

//        $this->create($seller);
//        $this->update($seller, 3);

        $product = new Request();
        $product['subcategory_id'] = 1;
        $product['name'] = '123';
        $product['mass'] = 20;

//        $this->createProduct($product, 3);
//        $this->updateProduct($product, 1);
//        $this->destroyProduct(1);

        $storage = new Request();
        $storage['user_id'] = 3;
        $storage['geolocation_id'] = 1;

        $storage1 = new Request();
        $storage1['user_id'] = 3;
        $storage1['geolocation_id'] = 1;

//        $this->createStorage($storage1);

//        $this->createStorage($storage);
//        $this->updateStorage($storage, 1);
//        $this->destroyStorage(1);

        $vehicles = new Request();
        $vehicles['storage_id'] = 2;
        $vehicles['tonnage'] = 20;

//        $this->createVehicle($vehicles);
//        $this->updateVehicle($vehicles, 1);
//        $this->destroyVehicle(1);

//        $this->addProductToStorages(2, [0 => ['storage_id' => 2, 'count' => 20]]);

//        $this->moveVehicleToStorage(2, 3);

//        $this->loadProductToStorage(2, 6, 100);
//        $this->moveProduct(6, 2, 3, 50);
        return view('/home');
    }

    public function moveProduct($product_id, $fromStorage_id, $toStorage_id, $count)
    {
        $moveProduct = new \App\Action\StoragesProducts\MoveAction($product_id, $fromStorage_id, $toStorage_id, $count);
        $moveProduct->move();
    }

    public function loadProductToStorage($storage_id, $product_id, $count)
    {
        $loadToStorage = new \App\Action\StoragesProducts\LoadToStorage($storage_id, $product_id, $count);
        $loadToStorage->load();
    }

    public function create(Request $request)
    {
        $createSeller = new CreateAction($request);
        $createSeller->create();
    }

    public function update(Request $request, $id)
    {
        $updateSeller = new UpdateAction($request, $id);
        $updateSeller->update();
    }

    /**
     * @param Request $request: product
     * @param $id: user id
     */
    public function createProduct(Request $request, $id)
    {
        $createProduct = new \App\Action\Products\CreateAction($request, $id);
        $createProduct->create();
    }

    /**
     * @param Request $request: product
     * @param $product: product id
     */
    public function updateProduct(Request $request, $product)
    {
        $updateProduct = new \App\Action\Products\UpdateAction($request, $product);
        $updateProduct->update();
    }

    /**
     * @param $product: product id
     */
    public function destroyProduct($product)
    {
        $destroyProduct = new \App\Action\Products\DestroyAction($product);
        $destroyProduct->destroy();
    }

    /**
     * @param Request $request: storage
     */
    public function createStorage(Request $request)
    {
        $createStorage = new \App\Action\Storages\CreateAction($request);
        $createStorage->create();
    }

    /**
     * @param Request $request: storage
     * @param $storage: storage id
     */
    public function updateStorage(Request $request, $storage)
    {
        $updateStorage = new \App\Action\Storages\UpdateAction($request, $storage);
        $updateStorage->update();
    }

    /**
     * @param $storage: storage id
     */
    public function destroyStorage($storage)
    {
        $destroyStorage = new \App\Action\Storages\DestroyAction($storage);
        $destroyStorage->destroy();
    }

    /**
     * @param Request $request: vehicle
     */
    public function createVehicle(Request $request)
    {
        $createVehicle = new \App\Action\Vehicles\CreateVehicle($request);
        $createVehicle->create();
    }

    /**
     * @param Request $request: vehicle
     * @param $vehicle: vehicle id
     */
    public function updateVehicle(Request $request, $vehicle)
    {
        $updateVehicle = new \App\Action\Vehicles\UpdateVehicle($request, $vehicle);
        $updateVehicle->update();
    }

    /**
     * @param $vehicle: vehicle id
     */
    public function destroyVehicle($vehicle)
    {
        $destroyVehicle = new \App\Action\Vehicles\DestroyVehicle($vehicle);
        $destroyVehicle->destroy();
    }

    /**
     * @param $vehicle: vehicle id
     * @param $storage: storage id
     */
    public function moveVehicleToStorage($vehicle, $storage)
    {
        $moveVehicle = new \App\Action\Vehicles\MoveToStorage($vehicle, $storage);
        $moveVehicle->move();
    }

    /**
     * @param $product: product id
     * @param $storages: array of storage
     */
    public function addProductToStorages($product, $storages)
    {
        $addProduct = new \App\Action\StoragesProducts\AddProduct($product, $storages);
        $addProduct->toStorages();
    }
}
