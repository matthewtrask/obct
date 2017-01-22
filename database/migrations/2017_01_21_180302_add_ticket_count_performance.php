<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTicketCountPerformance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('performance', function (Blueprint $table) {
            $table->integer('ticket_count')->after('teaser')->nullable();
            $table->string('audition_dates')->after('dates')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('performance', function (Blueprint $table) {
            $table->dropColumn('ticket_count');
            $table->dropColumn('audition_dates');
        });
    }
}
