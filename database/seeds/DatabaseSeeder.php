<?php

use Illuminate\Database\Seeder;
use App\TypeUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TypeUser::create(['name' => 'Customer']);
        TypeUser::create(['name' => 'Seller']);
    }
}
