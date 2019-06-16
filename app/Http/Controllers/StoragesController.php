<?php

namespace App\Http\Controllers;

use App\Action\Geolocation\CreateGeoAction;
use App\Action\Storages\CreateStorageAction;
use App\Action\Storages\DestroyStorageAction;
use App\Action\Storages\UpdateStorageAction;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use App\Storage;
use App\Geolocation;

class StoragesController extends Controller
{


    public function warehouses(Request $request)
    {
        $userId = Auth::id();
        /** @var Storege $warehouses */
        $warehouses = Storage::all()->where('user_id', '=', $userId);
        return view('seller.warehouseList', ['warehouses' => $warehouses]);
    }

    public function getUpdatePage($id, Request $request)
    {
        /** @var Storege $warehouse */
        $warehouse = Storage::find($id);
        if ($warehouse == null) {
            return redirect()->route('seller.addWarehouse');
        }

        $geolocation = Geolocation::find($warehouse->geolocation_id);
        $coordinats = ['longitude' => $geolocation->longitude, 'latitude' => $geolocation->latitude];

        return view('seller.updateWarehouse', ['coordinats' => $coordinats, 'id' => $warehouse->id, 'geolocation_id' => $warehouse->geolocation_id]);
    }

    public function create(Request $request)
    {

        $createStorage = new CreateStorageAction($request);
        $createStorage->create();
        return redirect()->route('seller.warehouses');
    }

    /**
     * @param Request $request : storage
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $geolocation = Geolocation::find($request->geolocation_id);
        $geolocation->longitude = $request->longitude;
        $geolocation->latitude = $request->latitude;
        $geolocation->save();

        $updateStorage = new UpdateStorageAction($request, $id);
        $updateStorage->update();
        return redirect()->route('seller.warehouses');
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
