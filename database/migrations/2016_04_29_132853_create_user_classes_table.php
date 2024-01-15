<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_classes', function(Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->integer('paid');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('class_id')->references('class_id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_classes');
    }
}
