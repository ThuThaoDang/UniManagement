<?php

use Illuminate\Database\Seeder;

class password_resets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->insert([
            ['email'=>'tranan@gmail.com','token'=>'ma thong bao'],
            ['email'=>'thucam@gmail.com','token'=>'ma thong bao'],
            ['email'=>'tienbo@gmail.com','token'=>'ma thong bao'],
            

        ]);
    }
}
