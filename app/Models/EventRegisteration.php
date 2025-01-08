<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegisteration extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'status',
        'attended',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
