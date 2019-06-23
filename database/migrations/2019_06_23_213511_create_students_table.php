<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stud_name');
            $table->unsignedInteger('tot_cred');
            $table->unsignedInteger('instructor_id');
            $table->unsignedInteger('department_id');
            $table->foreign('instructor_id')
                    ->references('id')->on('instructors')
                    ->onDelete('cascade');
            $table->foreign('department_id')
                    ->references('id')->on('departments')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
