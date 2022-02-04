<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            // $table->string('message');
            $table->string('user_id')->nullable();

            $table->string('img1_title')->nullable();
            $table->string('img2_title')->nullable();
            $table->string('img3_title')->nullable();
            $table->string('img1_text')->nullable();
            $table->string('img2_text')->nullable();
            $table->string('img3_text')->nullable();
            $table->string('img1_photo')->nullable();
            $table->string('img2_photo')->nullable();
            $table->string('img3_photo')->nullable();
            
            $table->string('goals_header')->nullable();
            $table->string('goals_body')->nullable();
            $table->string('headteacher_photo')->nullable();
            $table->string('goal1_title')->nullable();
            $table->string('goal2_title')->nullable();
            $table->string('goal3_title')->nullable();
            $table->string('goal4_title')->nullable();
            $table->string('goal1_text')->nullable();
            $table->string('goal2_text')->nullable();
            $table->string('goal3_text')->nullable();
            $table->string('goal4_text')->nullable();
            
            $table->string('meet_header')->nullable();
            $table->string('meet_body')->nullable();
            $table->string('meet1_title')->nullable();
            $table->string('meet2_title')->nullable();
            $table->string('meet3_title')->nullable();
            $table->string('meet1_text')->nullable();
            $table->string('meet2_text')->nullable();
            $table->string('meet3_text')->nullable();

            $table->string('curious_header')->nullable();
            $table->string('curious_body')->nullable();
            $table->string('cur_bul1')->nullable();
            $table->string('cur_bul2')->nullable();
            $table->string('cur_bul3')->nullable();
            $table->string('cur_bul4')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
