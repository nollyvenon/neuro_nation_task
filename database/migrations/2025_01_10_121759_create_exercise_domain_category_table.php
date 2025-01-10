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
        Schema::create('exercise_domain_category', function (Blueprint $table) {
            $table->unsignedBigInteger('exercise_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('exercise_id')->references('exercise_id')->on('exercises')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('domain_categories')->onDelete('cascade');

            $table->primary(['exercise_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_domain_category');
    }
};
