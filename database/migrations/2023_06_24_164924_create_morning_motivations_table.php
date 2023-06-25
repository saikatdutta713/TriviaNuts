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
        Schema::create('morning_motivations', function (Blueprint $table) {
            
            $table->bigInteger('motivation_id')->unsigned()->autoIncrement();
            $table->string('motivational_line');
            $table->string('author')->nullable();
            $table->bigInteger('author_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('morning_motivations');
    }
};
