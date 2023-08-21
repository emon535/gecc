<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email_address', 'qualification', 'desire_location', 'course_in_interest', 'certificate', 'message', 'booking_type', 'event_id'];

    public function scopeBookingType($query, $type)
    {
        $query->where('booking_type', $type);
    }
}