<?php

use Illuminate\Database\Seeder;
use App\TypeUser;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Customer',
            'email' => 'Customer@mail.ru',
            'password' => Hash::make('Customer'),
            'inn' => 1234567,
            'type_id' => 1,
            'phone' => '123456',
            'address' => 'Customer address'
        ]);


        User::create([
            'name' => 'Seller',
            'email' => 'Seller@mail.ru',
            'password' => Hash::make('Seller'),
            'inn' => 7654321,
            'type_id' => 2,
            'phone' => '7654321',
            'address' => 'Seller'
        ]);


    }
}
