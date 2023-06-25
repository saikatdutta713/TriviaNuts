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
        Schema::create('forum_posts', function (Blueprint $table) {
            
            $table->bigInteger('post_id')->unsigned()->autoIncrement();
            $table->string('content');
            $table->bigInteger('like')->default(0);
            $table->bigInteger('dislike')->default(0);
            $table->unsignedBigInteger('answer_id')->comment('Forum answer id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_posts');
    }
};
