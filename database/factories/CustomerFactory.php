<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'user_id' => factory(User::class),
        'father-name' => $faker->name(),
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'national_code' => '1234567891',
        'birth_date' => $faker->date(),
        'address' => $faker->address,
        'post_code' => '1234567891',
    ];
});
