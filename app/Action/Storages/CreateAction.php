<?php


namespace App\Action\Storages;

use App\Storage;
use Illuminate\Http\Request;

class CreateAction
{
    private $data;

    public function __construct(Request $newData)
    {
        $this->data = $newData;
    }

    public function create()
    {
        Storage::create($this->data->all());
    }
}