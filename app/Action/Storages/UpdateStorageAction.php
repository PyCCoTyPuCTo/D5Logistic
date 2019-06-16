<?php


namespace App\Action\Storages;

use App\Storage;
use Illuminate\Http\Request;

class UpdateStorageAction
{
    private $data;
    private $storage;

    public function __construct(Request $newData, $id)
    {
        $this->data = $newData;
        $this->storage = Storage::find($id)->first();
    }

    public function update()
    {
        $this->storage->update($this->data->all());
    }

}