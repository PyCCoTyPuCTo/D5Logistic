<?php


namespace App\Action\Products;

use Illuminate\Http\Request;
use App\Products;

class UpdateAction
{
    private $data;

    public function __construct(Request $newData, $id, $product)
    {
        $this->data = $newData;
    }

    public function update()
    {
        // TODO
        Products::updated($this->data);
    }
}