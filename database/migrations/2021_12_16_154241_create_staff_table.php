<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('staff_id');
            $table->string('department_id');
            $table->string('title');
            $table->string('fname');
            $table->string('sname');
            $table->string('dob');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('sch_email');
            $table->string('status')->default('Active');
            $table->string('role');
            $table->string('token');
            $table->string('pass_photo');
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
        Schema::dropIfExists('staff');
    }
}
