<?php

namespace App\Http\Controllers\Admin\Booking;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Exports\BookingExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->booking_type || !in_array($request->booking_type, [1, 2, 3])) {
            abort(404);
        }

        $bookings = Booking::bookingType($request->booking_type)->latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function export(Request $request)
    {
        if (!$request->booking_type || !in_array($request->booking_type, [1, 2, 3])) {
            abort(404);
        }

        $booking_type = $request->booking_type;

        $title = $booking_type == 1 ? 'E-Meeting' : ($booking_type == 2 ? 'Event Registration' : 'Free Consultation');
        return Excel::download(new BookingExport($booking_type), $title . '.xlsx');
    }
}