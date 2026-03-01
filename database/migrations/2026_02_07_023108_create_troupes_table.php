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
        Schema::create('troupes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // "Festival Theater Troupe" or "Jr Troupe"
            $table->enum('type', ['senior', 'junior']);
            $table->text('description');
            $table->text('requirements')->nullable();
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troupes');
    }
};
