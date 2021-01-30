<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Modules\Books\Entities\Genre;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2, true),
    ];
});
