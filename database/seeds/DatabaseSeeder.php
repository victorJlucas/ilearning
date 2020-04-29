<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
