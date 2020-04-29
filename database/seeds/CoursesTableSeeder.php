<?php

use App\Course;
use App\Goals;
use App\Requirement;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 50)->create()
            ->each(function (Course $c){
                $c->goals()->saveMany(factory(Goals::class, 2)->create());
                $c->requirements()->saveMany(factory(Requirement::class, 4)->create());
            });
    }
}
