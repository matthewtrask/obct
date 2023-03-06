<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('show_title');
            $table->string('show_teaser');
            $table->string('show_dates');
            $table->binary('show_image');
            $table->string('audition_dates');
            $table->string('audition_times');
            $table->text('show_info_one');
            $table->text('show_info_two');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
