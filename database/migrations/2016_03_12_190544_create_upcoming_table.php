<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpcomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming', function (Blueprint $table) {
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
