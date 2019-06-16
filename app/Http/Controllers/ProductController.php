<?php

namespace App\Http\Controllers;

use App\Action\Products\CreateAction;
use App\Action\Products\DestroyAction;
use App\Action\Products\UpdateAction;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param Request $request: product
     * @param $id: user id
     */
    public function create(Request $request, $id)
    {
        $createProduct = new CreateAction($request, $id);
        $createProduct->create();
    }

    /**
     * @param Request $request : product
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $updateProduct = new UpdateAction($request, $id);
        $updateProduct->update();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $destroyProduct = new DestroyAction($id);
        $destroyProduct->destroy();
    }
}
