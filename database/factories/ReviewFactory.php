<?php

use App\Course;
use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'course_id' => Course::all()->random()->id,
        'rating' => $faker-> numberBetween(1,5),
    ];
});
