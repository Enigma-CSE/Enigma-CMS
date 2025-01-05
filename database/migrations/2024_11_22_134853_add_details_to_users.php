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
        Schema::table('users', function (Blueprint $table) {
            $table->mediumText('usn')->nullable()->unique()->index();
            $table->enum('semester', ['1', '2', '3', '4', '5', '6', '7', '8'])->nullable()->default('1');
            $table->mediumText('phone')->unique()->nullable();
            $table->mediumText('image')->nullable();
            $table->boolean('is_alumini')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->longText('google_id')->nullable();
            $table->longText('github_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('usn')->nullable()->unique()->index();
            $table->enum('semester', ['1', '2', '3', '4', '5', '6', '7', '8'])->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_alumini')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->longText('google_id')->nullable();
            $table->longText('github_id')->nullable();
        });
    }
};
