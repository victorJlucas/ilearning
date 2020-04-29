<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Level::class, 1)->create(['name' => 'Beginner']);
        factory(Level::class, 1)->create(['name' => 'Intermediate']);
        factory(Level::class, 1)->create(['name' => 'Advanced']);

    }
}
