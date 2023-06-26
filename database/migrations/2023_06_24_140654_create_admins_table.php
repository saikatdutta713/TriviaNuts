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
        Schema::create('admins', function (Blueprint $table) {
            
            $table->bigInteger('admin_id')->unsigned()->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('dob')->nullable();
            $table->string('password');
            $table->string('role')->default('low')->comment('priority: high, medium, low');
            $table->boolean('active')->default(1);
            $table->string('last_login_location');
            $table->string('last_login')->useCurrent();
            $table->integer('session_duration')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
