<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTroupeAuditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TroupeAudition', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('dates');
            $table->string('times');
            $table->string('callbacks');
            $table->string('callback_times');
            $table->string('info');
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
