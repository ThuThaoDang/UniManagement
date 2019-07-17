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
            ['inst_name'=>'Nguyễn Văn A','salary'=>'1000','department_id'=>'1'],
            ['inst_name'=>'Nguyễn Văn B','salary'=>'1000','department_id'=>'1'],
            ['inst_name'=>'Nguyễn Văn C','salary'=>'1000','department_id'=>'1'],
            ['inst_name'=>'Nguyễn Văn D','salary'=>'1000','department_id'=>'1'],
            ['inst_name'=>'Trần Văn A','salary'=>'1000','department_id'=>'2'],
            ['inst_name'=>'Trần Văn B','salary'=>'1000','department_id'=>'2'],
            ['inst_name'=>'Trần Văn C','salary'=>'1000','department_id'=>'2'],
            ['inst_name'=>'Trần Văn D','salary'=>'1000','department_id'=>'2'],
            ['inst_name'=>'Lê Văn A','salary'=>'1000','department_id'=>'3'],
            ['inst_name'=>'Lê Văn B','salary'=>'1000','department_id'=>'3'],
            ['inst_name'=>'Lê Văn C','salary'=>'1000','department_id'=>'3'],
            ['inst_name'=>'Lê Văn D','salary'=>'1000','department_id'=>'3'],
        ]);
    }
}
