<?php


namespace App\Action\Storages;

use App\Storage;

class DestroyStorageAction
{
    private $storage;

    public function __construct($id)
    {
        $this->storage = Storage::find($id)->first();
    }

    public function destroy()
    {
        $this->storage->delete();
    }
}