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
        Schema::create('song_collections', function (Blueprint $table) {
            $table->unsignedBigInteger('e_song_id');
            $table->foreign('e_song_id')->references('id')->on('songs')->cascadeOnDelete();
            $table->unsignedBigInteger('e_collection_id');
            $table->foreign('e_collection_id')->references('id')->on('collections')->cascadeOnDelete();
            $table->primary(['e_song_id','e_collection_id']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('song_collections');
    }
};
