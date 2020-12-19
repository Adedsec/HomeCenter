<?php

use App\Customer;
use App\Estate;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //factory(User::class, 10)->create();
        factory(Estate::class, 10)->create();
        factory(Customer::class, 10)->create();
    }
}
