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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->longText('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('event_type', ['workshop', 'webinar', 'seminar', 'conference', 'expo', 'meetup', 'hackathon']);
            $table->mediumText('location');
            $table->mediumText('banner')->nullable();
            $table->mediumText('poster')->nullable();
            $table->mediumText('speaker');
            $table->mediumText('speaker_mail');
            $table->mediumText('speaker_phone')->nullable();
            $table->enum('status', ['draft', 'published', 'cancelled']);
            $table->boolean('is_featured')->default(false);
            $table->boolean('requires_registration')->default(true);
            $table->integer('max_attendees')->default(0);
            $table->boolean('has_certificate')->default(false);
            $table->boolean('notify_attendees')->default(false);
            $table->boolean('notify_attendance')->default(false);
            $table->boolean('attendance_code_is_valid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
