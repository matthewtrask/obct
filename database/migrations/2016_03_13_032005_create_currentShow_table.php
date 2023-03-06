<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrentShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currentShow', function (Blueprint $table) {
            $table->increments('id');
            $table->string('show_title');
            $table->text('description');
            $table->string('dates');
            $table->string('price');
            $table->string('link');
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
