<?php

use App\TypeUser;
use Illuminate\Database\Seeder;
use App\TypeUser;

class TypeUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeUser::create(['name' => 'Customer']);
        TypeUser::create(['name' => 'Seller']);
    }
}
