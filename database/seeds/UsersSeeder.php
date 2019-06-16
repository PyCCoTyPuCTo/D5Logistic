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
            'name' => 'Customer1',
            'email' => 'Customer@mail.ru',
            'password' => Hash::make('Customer@mail.ru'),
            'inn' => 1234567,
            'type_id' => 1,
            'phone' => '123456',
            'address' => 'Customer address'
        ]);


        User::create([
            'name' => 'Seller',
            'email' => 'Seller@mail.ru',
            'password' => Hash::make('Seller@mail.ru'),
            'inn' => 7654321,
            'type_id' => 2,
            'phone' => '7654321',
            'address' => 'Seller'
        ]);

        User::create([
            'name' => 'Customer2',
            'email' => 'Customer2@mail.ru',
            'password' => Hash::make('Customer2@mail.ru'),
            'inn' => 6563346,
            'type_id' => 1,
            'phone' => '7654321',
            'address' => 'Customer address2'
        ]);
    }
}
