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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->mediumText('email');
            $table->mediumText('password');
            $table->mediumText('phone');
            $table->mediumText('qualification');
            $table->mediumText('specialization');
            $table->mediumText('experience');
            $table->enum('designation',['HoD', 'Professor', 'Associate Professor', 'Assistant Professor', 'Lecturer', 'Others'])->default('Assistant Professor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
