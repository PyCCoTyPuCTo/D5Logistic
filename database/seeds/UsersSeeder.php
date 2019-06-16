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
            'name' => 'Customer2',
            'email' => 'Customer2@mail.ru',
            'password' => Hash::make('Customer2@mail.ru'),
            'inn' => 6563346,
            'type_id' => 1,
            'phone' => '7654321',
            'address' => 'Customer address2'
        ]);

        User::create([
            'name' => 'Customer4',
            'email' => 'Customer4@mail.ru',
            'password' => Hash::make('Customer4@mail.ru'),
            'inn' => 6563346,
            'type_id' => 1,
            'phone' => '7654321',
            'address' => 'Customer address2'
        ]);

        User::create([
            'name' => 'ООО Алмаз',
            'email' => 'Customer8@mail.ru',
            'password' => Hash::make('Customer8@mail.ru'),
            'inn' => 257129875,
            'type_id' => 1,
            'phone' => '79781234567',
            'address' => 'ул Ген. Жидилова 26А'
        ]);

        User::create([
            'name' => 'ИП Семенова И.О.',
            'email' => 'Selle312312r@mail.ru',
            'password' => Hash::make('Selle312312r@mail.ru'),
            'inn' => 257129875,
            'type_id' => 2,
            'phone' => '79781234567',
            'address' => 'просп. Острякова 22'
        ]);

        User::create([
            'name' => 'Seller2',
            'email' => 'Seller@mail.ru',
            'password' => Hash::make('Seller@mail.ru'),
            'inn' => 7654321,
            'type_id' => 2,
            'phone' => '7654321',
            'address' => 'Seller'
        ]);

        User::create([
            'name' => 'Seller3',
            'email' => 'Sellfsfdfder@mail.ru',
            'password' => Hash::make('Seller@mail.ru'),
            'inn' => 7654321,
            'type_id' => 2,
            'phone' => '7654321',
            'address' => 'Seller'
        ]);

        User::create([
            'name' => 'Seller4',
            'email' => 'Selserler@mail.ru',
            'password' => Hash::make('Seller@mail.ru'),
            'inn' => 7654321,
            'type_id' => 2,
            'phone' => '7654321',
            'address' => 'Seller'
        ]);
    }
}
