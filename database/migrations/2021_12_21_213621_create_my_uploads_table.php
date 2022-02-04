<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('user_id');
            $table->string('staff_id');
            $table->string('department_id');
            $table->string('title');
            $table->string('type');
            $table->string('status')->nullable();
            $table->string('del')->default('no');
            $table->string('photo');
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
        Schema::dropIfExists('my_uploads');
    }
}
