<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BookingExport implements FromView
{

    protected $booking_type;

    public function __construct($booking_type)
    {
        $this->booking_type = $booking_type;
    }

    public function view(): View
    {
        return view('exports.bookings', [
            'booking_type' => $this->booking_type,
            'bookings' => Booking::bookingType($this->booking_type)->latest()->get()
        ]);
    }
}