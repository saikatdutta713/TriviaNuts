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
        Schema::create('quizzes', function (Blueprint $table) {
            
            $table->bigInteger('quiz_id')->unsigned()->autoIncrement();
            $table->string('time');
            $table->string('title');
            $table->string('duration')->default('10 Minutes');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('set_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
