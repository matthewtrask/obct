<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('show_image')->nullable();
            $table->enum('status', ['upcoming', 'current', 'past'])->default('upcoming');
            $table->decimal('ticket_price', 8, 2)->nullable();
            $table->string('ticket_url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('audition_date')->nullable();
            $table->text('audition_info')->nullable();
            $table->json('performance_times')->nullable(); // ["Friday 7pm", "Saturday 2pm", "Saturday 7pm"]
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
