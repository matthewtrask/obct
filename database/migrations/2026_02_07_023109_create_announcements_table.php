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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['alert', 'news'])->default('news');
            $table->string('title');
            $table->text('content');
            $table->string('link_url')->nullable();
            $table->string('link_text')->nullable(); // "Read More", "Sign Up", etc
            $table->boolean('active')->default(true);
            $table->date('expires_at')->nullable(); // Auto-hide after this date
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
