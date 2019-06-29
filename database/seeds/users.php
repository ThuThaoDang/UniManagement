<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'tranan','email'=>'tranan@gmail.com','password'=>'123','remember_token'=>'remember'],
            ['name'=>'thucam','email'=>'thucam@gmail.com','password'=>'123','remember_token'=>'remember'],
            ['name'=>'tienbo','email'=>'tienbo@gmail.com','password'=>'123','remember_token'=>'remember'],
            
        ]);
    }
}
