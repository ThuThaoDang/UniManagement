<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(departments::class);
        $this->call(instructors::class);
        $this->call(students::class);
        $this->call(courses::class);
        $this->call(users::class);
        $this->call(password_resets::class);

    }
}
