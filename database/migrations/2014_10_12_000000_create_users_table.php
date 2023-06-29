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
        Schema::create('users', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned()->autoIncrement();
            $table->string('name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('mobile')->nullable();
            $table->string('picture')->default('picture.jpg');
            $table->string('bio')->nullable();
            $table->string('dob')->nullable();
            $table->integer('contribution_no')->default(0);
            $table->timestamp('last_login')->useCurrent();
            $table->bigInteger('badge_id')->unsigned()->nullable();
            $table->bigInteger('newsletter_id')->unsigned()->nullable();
            
            $table->string('login_type')->default('Manual');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
