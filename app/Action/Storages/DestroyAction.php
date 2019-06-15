<?php


namespace App\Action\Storages;

use App\Storage;

class DestroyAction
{
    private $storage;

    public function __construct($id)
    {
        $this->storage = Storage::find($id)->get();
    }

    public function destroy()
    {
        $this->storage->delete();
    }
}