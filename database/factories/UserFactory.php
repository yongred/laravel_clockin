<?php

use App\User;
use App\Company;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // password
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'active' => 1,
        'role_id' => 1, // 1 employee, 2 manageer
        'manager_id' => $faker->numberBetween(3, 5),
        'company_id' => $faker->numberBetween(1, 3),
        'remember_token' => Str::random(10),
    ];
});