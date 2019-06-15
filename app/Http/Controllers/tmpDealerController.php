<?php

namespace App\Http\Controllers;

use App\Action\Sellers\CreateAction;
use App\Action\Sellers\UpdateAction;
use Illuminate\Http\Request;

class tmpDealerController extends Controller
{
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
    public function createProduct(Request $request)
    {
        $createProduct = new \App\Action\Products\CreateAction($request);
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
