<?php

use App\Course;
use App\Goals;
use Faker\Generator as Faker;

$factory->define(Goals::class, function (Faker $faker) {
    return [
        'course_id' => Course::all()->random()->id,
        'goal' => $faker->sentence,
    ];
});
