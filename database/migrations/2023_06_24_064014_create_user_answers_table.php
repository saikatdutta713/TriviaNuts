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
        Schema::create('user_answers', function (Blueprint $table) {
            
            $table->bigInteger('answer_id')->unsigned()->autoIncrement();
            $table->string('chosen_option');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('participant_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('quiz_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
};
