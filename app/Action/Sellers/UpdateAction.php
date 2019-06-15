<?php


namespace App\Action\Sellers;

use App\User;
use Illuminate\Http\Request;

class UpdateAction
{
    private $data;
    private $idSeller;

    public function __construct(Request $newData, $id)
    {
        $this->data = $newData;
        $this->idSeller = $id;
    }

    public function update()
    {
        $user = new User($this->idSeller);
        User::updated($this->data);
    }
}