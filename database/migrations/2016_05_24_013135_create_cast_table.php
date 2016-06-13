<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->increments('cast_id')->unsigned();
            $table->integer('show_id')->unsigned();
            $table->string('student');
            $table->string('role');
            $table->string('cast');
            $table->integer('active');
            $table->timestamps();

            $table->foreign('show_id')
                ->references('id')
                ->on('currentShow')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cast');
    }
}
