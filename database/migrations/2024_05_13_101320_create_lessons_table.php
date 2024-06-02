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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->string('slug', 250)->unique();
            $table->string('excerpt');
            $table->text('content');
            $table->integer('order');
            $table->foreignId('course_id')->constrained('courses');
            $table->timestamps();

            $table->unique(['course_id', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
