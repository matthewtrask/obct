<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('teaser');
            $table->text('description');
            $table->string('dates');
            $table->string('price');
            $table->string('link');
            $table->string('cast_page');
            $table->binary('show_image');
            $table->integer('active');
            $table->integer('upcoming');
            $table->integer('auditions');
            $table->integer('past');
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
        Table::drop('performance');
    }
}
