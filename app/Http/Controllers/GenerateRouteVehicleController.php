<?php

namespace App\Http\Controllers;

use App\Geolocation;
use App\Order;
use App\Storage;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenerateRouteVehicleController extends Controller
{
    /**
     * @var Storage
     */
    private $storage;
    /**
     * @var Order[]
     */
    private $orders;

    /**
     * @var Geolocation[]
     */
    private $geo;

    /**
     * @var Vehicle
     */
    private $vehicle;

    public function init() {
        $this->storage = Storage::where('user_id', Auth::id())->get();
        $this->orders = Order::where('storage_id', $this->storage->id)->get();
        $this->vehicle = Vehicle::where('storage_id', $this->storage->id)->get();
        $this->geo = Geolocation::find($this->storage->geolocation_id)->get();

        foreach ($this->orders as $order) {
            $geolocation = Geolocation::find($order->geolocation_id);
            $this->geo = $geolocation;
        }

        return $this->geo;
    }
}
