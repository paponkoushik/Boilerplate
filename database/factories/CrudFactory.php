<?php

use App\Models\App\Crud\Crud;
use Faker\Generator;

$factory->define(Crud::class, function (Generator $faker) {
    $gender = $faker->randomElement(['male', 'female', 'other']);
    $status = $faker->randomElement(['active', 'inactive', 'invited']);
    return [
        'name' => $faker->name($gender),
        'email' => $faker->safeEmail,
        'phone' => '+880 1' . $faker->randomElement(['3','6','7','8','9','5','4']) . rand(10, 99). '-' . $faker->randomNumber(6, true),
        'gender' => $gender,
        'age' => $faker->numberBetween(18, 60),
        'status' => $status,
        'created_at' =>now(),
        'updated_at' =>now(),
    ];
});