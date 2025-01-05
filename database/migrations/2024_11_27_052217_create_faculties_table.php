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
            $table->enum('qualification', ['BSc', 'MSc', 'PhD', 'MPhil', 'BTech', 'MTech', 'BBA', 'MBA', 'BCom', 'MCom', 'BA', 'MA', 'BEd', 'MEd', 'BArch', 'MArch', 'BPharm', 'MPharm', 'BDS', 'MDS', 'MBBS', 'MD', 'MS', 'DM', 'MCh', 'PG Diploma', 'Others']);
            $table->mediumText('specialization');
            $table->mediumText('experience');
            $table->mediumText('designation');
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
