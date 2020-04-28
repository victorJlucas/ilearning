<?php

use App\Categories;
use App\Course;
use App\Level;
use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $name = $faker->sentence;
    $status = $faker->randomElement([Course::PUBLISHED, Course::PENDING, Course::REJECTED]);

    return [
        'teacher_id' => Teacher::all()->random()->id,
        'category_id' => Categories::all()->random()->id,
        'level_id' => Level::all()->random()->id,
        'name' => $name,
        'slug' => str_slug($name, '-'),
        'description' => $faker->paragraph,
        'picture' => \Faker\Provider\Image::image(storage_path() . '/app/public/courses', 600, 350, 'business', false),
        'status' => $status,
        'previous_approved' => $status !== Course::PUBLISHED ? false : true,
        'previous_rejected' => $status === Course::REJECTED ? true : false,
    ];
});
