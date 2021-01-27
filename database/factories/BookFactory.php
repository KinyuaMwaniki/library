<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Modules\Books\Entities\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'author' => $faker->name,
        'isbn' => $faker->bankAccountNumber ,
        'publisher' => $faker->sentence(3, true),
        'genre_id' => $faker->numberBetween(1,20),
        'publication_date' => Carbon::parse($faker->date('Y-m-d', 'now'))
    ];
});

