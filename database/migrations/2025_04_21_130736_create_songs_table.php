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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('artist_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('genre_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('album_id')->index()->constrained()->cascadeOnDelete();

            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
