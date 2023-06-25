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
        Schema::create('hot_newses', function (Blueprint $table) {
            
            $table->bigInteger('news_id')->unsigned()->autoIncrement();
            $table->string('title');
            $table->string('content_text');
            $table->string('content_picture')->nullable();
            $table->json('tags')->nullable();
            $table->bigInteger('author_admin');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hot_newses');
    }
};
