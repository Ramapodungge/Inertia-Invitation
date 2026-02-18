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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title'); // Contoh: Pernikahan Budi & Wati
            $table->string('slug')->unique(); // Untuk URL: /budi-wati
            $table->string('theme')->default('classic');
            $table->text('quote')->nullable(); // Kutipan ayat atau kata mutiara
            $table->string('music_url')->nullable(); // Background music
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
