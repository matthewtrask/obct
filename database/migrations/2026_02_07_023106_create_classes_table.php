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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('age_range')->nullable(); // "5-8 years"
            $table->string('schedule')->nullable(); // "Mondays 4-5pm"
            $table->enum('session_type', ['year-round', 'summer', 'workshop'])->default('year-round');
            $table->decimal('price', 8, 2)->nullable();
            $table->date('start_date')->nullable(); // For summer/workshops
            $table->date('end_date')->nullable(); // For summer/workshops
            $table->integer('capacity')->nullable(); // Max students
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('order')->default(0); // For sorting
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
