<?php

use App\Role;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([
           'name' => 'Victor',
           'last_name' => 'Lucas',
           'email' => 'victor@gmail.com',
           'password' => bcrypt('123456'),
           'role_id' => Role::ADMIN,
        ])->each(function (User $u){
            factory(Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(User::class, 50)->create()
            ->each(function (User $u){
            factory(Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(User::class, 10)->create()
            ->each(function (User $u){
                factory(Teacher::class, 1)->create(['user_id' => $u->id]);
                factory(Student::class, 1)->create(['user_id' => $u->id]);
            });
    }
}
