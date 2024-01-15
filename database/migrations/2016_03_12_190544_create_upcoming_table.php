<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpcomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming', function(Blueprint $table){
            $table->increments('id');
            $table->string('show_title');
            $table->string('dates');
            $table->string('auditions')->nullable();
            $table->string('audition_prep')->nullable();
            $table->string('ticket_price');
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
