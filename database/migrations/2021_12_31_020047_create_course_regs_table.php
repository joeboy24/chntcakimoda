<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_regs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('program_id');
            $table->string('course_id');
            $table->string('year');
            $table->string('sem');
            $table->string('optional')->default('no');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('course_regs');
    }
}
