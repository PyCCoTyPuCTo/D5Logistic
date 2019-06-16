<?php

namespace App\Http\Controllers;

use App\Action\Storages\CreateStorageAction;
use App\Action\Storages\DestroyStorageAction;
use App\Action\Storages\UpdateStorageAction;
use Illuminate\Http\Request;

class StoragesController extends Controller
{
    public function create(Request $request)
    {
        $createStorage = new CreateStorageAction($request);
        $createStorage->create();
    }

    /**
     * @param Request $request : storage
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $updateStorage = new UpdateStorageAction($request, $id);
        $updateStorage->update();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $destroyStorage = new DestroyStorageAction($id);
        $destroyStorage->destroy();
    }
}
