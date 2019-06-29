<?php

use Illuminate\Database\Seeder;

class instructors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
            ['inst_name'=>'Lê Hoàng','salary'=>'30000','department_id'=>'1'],
            ['inst_name'=>'Hoàng Ngân','salary'=>'30000','department_id'=>'2'],
            ['inst_name'=>'Đặng Tú','salary'=>'30000','department_id'=>'3'],
            ['inst_name'=>'Lí Tí','salary'=>'30000','department_id'=>'4'],
            ['inst_name'=>'Lê Giang','salary'=>'30000','department_id'=>'1'],
            ['inst_name'=>'Nguyễn Cẩm Tiên','salary'=>'30000','department_id'=>'5'],
            ['inst_name'=>'Trần Tuấn','salary'=>'30000','department_id'=>'6'],
            ['inst_name'=>'Lê Tín','salary'=>'30000','department_id'=>'6'],

            ['inst_name'=>'Trọng Tín','salary'=>'30000','department_id'=>'5'],


        ]);
    }
}
