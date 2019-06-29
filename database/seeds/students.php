<?php

use Illuminate\Database\Seeder;

class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['stud_name'=>'Nguyễn Cảnh','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Đỗ Cẩm','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],
            ['stud_name'=>'Lê Thu','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Nguyễn Xuân','tot_cred'=>'142','instructor_id'=>'4','department_id'=>'3'],
            ['stud_name'=>'Trần Tú','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Trọng Bảo','tot_cred'=>'142','instructor_id'=>'4','department_id'=>'4'],
            ['stud_name'=>'Hà Tiên','tot_cred'=>'142','instructor_id'=>'4','department_id'=>'4'],
            ['stud_name'=>'Hồng Nhân','tot_cred'=>'142','instructor_id'=>'5','department_id'=>'5'],
            ['stud_name'=>'Hoàng Yến','tot_cred'=>'142','instructor_id'=>'6','department_id'=>'6'],
            ['stud_name'=>'An Nhiên','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],

        ]);
    }
}
