<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estate;
use App\Owner;
use App\User;
use Faker\Generator as Faker;

$factory->define(Estate::class, function (Faker $faker) {
    return [
        'type' => 'sell',
        'user_id' => factory(User::class),
        'owner_id' => factory(Owner::class),
        'title' => $faker->name(),
        'description' => $faker->sentence(10),
        'price' => $faker->randomNumber(6),
        'rent_price' => $faker->randomNumber(5),
        'usage' => 'مسکونی',
        'area' => $faker->randomNumber(3),
        'build_date' => $faker->date(),
        'address' => $faker->paragraph(3),
        'img_link' => $faker->url,
        'elevator' => $faker->boolean(),
        'anbari' => $faker->boolean(),
        'parking' => $faker->boolean(),
        'room_count' => $faker->randomNumber(1),
    ];
});
