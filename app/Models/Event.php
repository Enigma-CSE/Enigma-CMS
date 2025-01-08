<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'event_type',
        'location',
        'banner',
        'poster',
        'speaker',
        'speaker_mail',
        'speaker_phone',
        'status',
        'is_featured',
        'requires_registration',
        'max_attendees',
        'has_certificate',
        'notify_attendees',
        'notify_attendance',
        'attendance_code_is_valid',
    ];

    public function registerations()
    {
        return $this->hasMany(EventRegisteration::class);
    }
}
