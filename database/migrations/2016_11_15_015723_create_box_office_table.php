<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_office', function (Blueprint $table) {
            $table->integer('transaction_id');
            $table->uuid('transaction_uuid');
            $table->integer('performance_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->double('amount');
            $table->integer('ticket_count');
            $table->integer('payment_id');
            $table->string('transaction_state');
            $table->string('failure_reason');
            $table->string('create_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('box_office');
    }
}
