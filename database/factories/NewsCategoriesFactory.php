<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NewsCategories;
use Faker\Generator as Faker;

$factory->define(NewsCategories::class, function (Faker $faker) {
    return [
        //
        
        'name' => $faker->name,
        
    ];
});
