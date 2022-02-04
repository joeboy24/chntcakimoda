<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('std_id')->nullable();
            $table->string('program_id')->nullable();
            $table->string('index_no')->nullable();
            
            $table->string('user_id');
            $table->string('fname');
            $table->string('sname');

            $table->date('dob');
            $table->string('sex');
 
            $table->string('class');
            $table->string('guardian')->nullable();
            $table->string('guard_rel')->nullable();
            $table->string('guardian_cont')->nullable();

            $table->string('contact');
            $table->string('sch_contact')->nullable();
            $table->string('email')->nullable();
            $table->string('sch_email')->nullable();
            $table->string('residence')->nullable();
            $table->string('res_address')->nullable();

            $table->string('bill')->default(0);
            $table->string('photo');
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
        Schema::dropIfExists('students');
    }
}
