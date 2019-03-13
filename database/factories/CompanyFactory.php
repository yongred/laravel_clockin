<?php

use App\User;
use App\Company;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'company_code' => $faker->randomNumber(8, true)
    ];
});