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
    public function createProduct(Request $request, $id)
    {
        $createProduct = new \App\Action\Products\CreateAction($request, $id);
        $createProduct->create();
    }

    /**
     * @param Request $request: product
     * @param $id: user id
     * @param $product: product id
     */
    public function updateProduct(Request $request, $id, $product)
    {
        $updateProduct = new \App\Action\Products\UpdateAction($request, $id, $product);
        $updateProduct->update();
    }

    /**
     * @param $id: user id
     * @param $product: product id
     */
    public function destroyProduct($id, $product)
    {
        $destroyProduct = new \App\Action\Products\DestroyAction($id, $product);
        $destroyProduct->destroy();
    }

    /**
     * @param Request $request: storage
     * @param $id: user id
     */
    public function createStorage(Request $request, $id)
    {

    }

    /**
     * @param Request $request: storage
     * @param $id: user id
     * @param $storage: storage id
     */
    public function updateStorage(Request $request, $id, $storage)
    {

    }

    /**
     * @param $id: user id
     * @param $storage: storage id
     */
    public function destroyStorage($id, $storage)
    {

    }

    /**
     * @param Request $request: vehicle
     * @param $id: user id
     */
    public function createVehicle(Request $request, $id)
    {

    }

    /**
     * @param Request $request: vehicle
     * @param $id: user id
     * @param $vehicle: vehicle id
     */
    public function updateVehicle(Request $request, $id, $vehicle)
    {

    }

    /**
     * @param $id: user id
     * @param $vehicle: vehicle id
     */
    public function destroyVehicle($id, $vehicle)
    {

    }

    /**
     * @param $id: user id
     * @param $vehicle: vehicle id
     * @param $storage: storage id
     */
    public function moveVehicleToStorage($id, $vehicle, $storage)
    {

    }

    /**
     * @param $id: user id
     * @param $product: product id
     * @param $storages: array of storage
     */
    public function addProductToStorages($id, $product, $storages)
    {

    }
}
