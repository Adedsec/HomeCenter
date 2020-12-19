<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use App\User;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
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
