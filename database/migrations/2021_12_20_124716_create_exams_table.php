<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('staff_id');
            $table->string('course_id');
            $table->string('department_id');
            $table->string('exam_title');
            $table->string('exam_type');
            $table->string('no_of_qs');
            $table->string('duration')->nullable();
            $table->string('status')->default('closed');
            $table->string('del')->default('no');
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
        Schema::dropIfExists('exams');
    }
}
