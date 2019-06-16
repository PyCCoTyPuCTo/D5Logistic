<?php


namespace App\Action\Storages;

use App\Storage;

class GetAllAction
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function get()
    {
        $storages = Storage::where('user_id', $this->user)->get();
        return $storages;
    }
}