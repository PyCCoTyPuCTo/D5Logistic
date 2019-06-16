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
        $this->call(TypeUsersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GeolocationSeeder::class);
    }
}
