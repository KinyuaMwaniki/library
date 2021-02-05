<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Modules\Books\Entities\Issuance;
use Modules\Settings\Entities\Setting;

$factory->define(Issuance::class, function (Faker $faker) {
    $default_issue_days = $faker->numberBetween(3, 21);
    $default_returned_days = $faker->numberBetween(5, 30);
    $date =$faker->date('Y-m-d');
    return [
        'book_id' => $faker->numberBetween(1, 100),
        'student_id' => $faker->numberBetween(1, 100),
        'user_id' => 1,
        'date_issued' => Carbon::parse($date),
        'date_expected' => Carbon::parse($date)->copy()->addDays($default_issue_days),
        'date_returned' => Carbon::parse($date)->copy()->addDays($default_returned_days),
        'received_by_id' => 1,
    ];
});
