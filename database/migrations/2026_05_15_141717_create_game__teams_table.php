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
        Schema::create('game__teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('team_id')->nullable();


            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->nullOnDelete();

            $table->unsignedBigInteger('game_id')->nullable();


            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game__teams');
    }
};
