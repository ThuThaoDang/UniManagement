<?php

use Illuminate\Database\Seeder;

class departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['dept_name'=>'TOAN','building'=>'A','budget'=>'20000'],
            ['dept_name'=>'SINH','building'=>'B','budget'=>'20000'],
            ['dept_name'=>'LI','building'=>'C','budget'=>'20000'],
            ['dept_name'=>'HOA','building'=>'D','budget'=>'20000'],
            ['dept_name'=>'DTVT','building'=>'E','budget'=>'20000'],
            ['dept_name'=>'CNTT','building'=>'F','budget'=>'20000'],
            
        ]);
    }
}
