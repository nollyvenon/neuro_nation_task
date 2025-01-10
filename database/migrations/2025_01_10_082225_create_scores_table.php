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
        Schema::create('scores', function (Blueprint $table) {
            $table->id('score_id');
           // $table->foreignId('session_id')->constrained('sessions');
            $table->unsignedBigInteger('session_id');
            $table->foreign('session_id')->references('session_id')->on('sessions');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('score');
            $table->integer('start_difficulty');
            $table->integer('end_difficulty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
