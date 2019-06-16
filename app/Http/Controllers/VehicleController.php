<?php

namespace App\Http\Controllers;

use App\Action\Vehicles\CreateVehicleAction;
use App\Action\Vehicles\DestroyVehicleAction;
use App\Action\Vehicles\MoveToStorageAction;
use App\Action\Vehicles\UpdateVehicleAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Storage;

class VehicleController extends Controller
{

    public function getVehicleList(Request $request)
    {
        $id = Auth::id();
        $storages = Storage::all()->where('user_id', '=', 'id');

        if ($storages == null) {
            $storages = [];
        }
        return view('seller.cars', ['storages' => $storages]);
    }

    public function create(Request $request)
    {
        $createVehicle = new CreateVehicleAction($request);
        $createVehicle->create();
    }

    public function update(Request $request)
    {
        $updateVehicle = new UpdateVehicleAction($request);
        $updateVehicle->update();
    }

    public function destroy($id)
    {
        $destroyVehicle = new DestroyVehicleAction($id);
        $destroyVehicle->destroy();
    }

    public function moveToStorage($idVehicle, $idStorage)
    {
        $moveVehicle = new MoveToStorageAction($idVehicle, $idStorage);
        $moveVehicle->move();
    }
}
