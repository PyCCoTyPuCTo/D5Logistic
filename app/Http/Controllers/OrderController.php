<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orders($storage_id)
    {

        $orders = DB::table('orders')
            ->join('storage', function($join){
                $join->on('orders.storage_id', '=', 'storage.id');
            })
            ->join('users', function($join){
                $userId = Auth::id();

                $join->on('storage.user_id', '=', 'users.id')
                    ->where('users_id', $userId);
            });

        return view('', ['']);
    }
}
