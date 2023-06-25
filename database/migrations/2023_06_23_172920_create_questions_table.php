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
        Schema::create('questions', function (Blueprint $table) {
            
            $table->bigInteger('question_id')->unsigned()->autoIncrement();
            $table->string('question_text');
            $table->string('question_picture')->nullable();
            $table->string('answer_option_a');
            $table->string('answer_option_b');
            $table->string('answer_option_c');
            $table->string('answer_option_d');
            $table->string('correct_option');
            $table->unsignedBigInteger('category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
