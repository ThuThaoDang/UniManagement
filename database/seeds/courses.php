<?php

use Illuminate\Database\Seeder;

class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['title'=>'Giải tích A','credits'=>'3','department_id'=>'1'],
            ['title'=>'Sinh đại cương','credits'=>'3','department_id'=>'2'],
            ['title'=>'Cơ học','credits'=>'3','department_id'=>'3'],
            ['title'=>'Hóa đại cương','credits'=>'3','department_id'=>'4'],
            ['title'=>'Điện tử số','credits'=>'3','department_id'=>'5'],
            ['title'=>'Lập trình ứng dụng','credits'=>'3','department_id'=>'6'],
            ['title'=>'Java','credits'=>'3','department_id'=>'6'],
            ['title'=>'Hệ thống nhúng','credits'=>'3','department_id'=>'5'],
            ['title'=>'Đại số','credits'=>'3','department_id'=>'1'],

        ]);
    }
}
