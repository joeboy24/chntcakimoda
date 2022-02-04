<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdCourseRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_course_regs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('student_id');
            $table->string('program_id');
            $table->string('course_id');
            $table->string('year');
            $table->string('sem');
            $table->string('del')->default('no');
            $table->string('status')->default('active');
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
        Schema::dropIfExists('std_course_regs');
    }
}
