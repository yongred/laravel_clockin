<?php

use App\Address;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    $entity_type = $faker->numberBetween(1, 2);
    $entity_id = ($entity_type == 1) ? $faker->numberBetween(3, 25) : $faker->numberBetween(1, 10);
    return [
        'entity_type_id' => $entity_type,
        'entity_id' => $entity_id,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state_id' => $faker->numberBetween(1, 59),
        'country_id' => $faker->numberBetween(1, 250),
        'postal_code' => $faker->postcode
    ];
});