<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_subs', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id');
            $table->string('student_id');
            $table->string('que_seq')->nullable();
            $table->string('ans_seq')->nullable();
            $table->string('start_time')->nullable();
            $table->string('stop_time')->nullable();
            $table->string('cur_que')->nullable();
            $table->string('que_count')->nullable();
            $table->string('score')->default(0);
            $table->string('status')->default('open');
            $table->string('other')->nullable();
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
        Schema::dropIfExists('exam_subs');
    }
}
