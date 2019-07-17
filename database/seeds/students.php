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
            ['stud_name'=>'Nguyễn A','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Nguyễn Ba','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Nguyễn Cảnh','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'Nguyễn Đào','tot_cred'=>'142','instructor_id'=>'1','department_id'=>'1'],
            ['stud_name'=>'HÀ An','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],
            ['stud_name'=>'Lê Tú','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],
            ['stud_name'=>'Nguyễn A','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],
            ['stud_name'=>'Nguyễn B','tot_cred'=>'142','instructor_id'=>'2','department_id'=>'2'],
            ['stud_name'=>'Trần Kiên','tot_cred'=>'142','instructor_id'=>'3','department_id'=>'3'],
            ['stud_name'=>'Trền Bảo','tot_cred'=>'142','instructor_id'=>'3','department_id'=>'3'],
            ['stud_name'=>'Nguyễn Nam','tot_cred'=>'142','instructor_id'=>'3','department_id'=>'3'],
            ['stud_name'=>'Nguyễn Nữ','tot_cred'=>'142','instructor_id'=>'3','department_id'=>'3'],
        ]);
    }
}
