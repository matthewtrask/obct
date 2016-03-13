<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summer', function(Blueprint $table){
            $table->increments('id');
            $table->string('show_title');
            $table->string('ages');
            $table->string('dates');
            $table->string('time');
            $table->string('cost');
            $table->string('show_dates');
            $table->text('show_info');
            $table->binary('show_image');
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
