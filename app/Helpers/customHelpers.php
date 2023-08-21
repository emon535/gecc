<?php

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

if (!function_exists('logged_in_user_id')) {

    function logged_in_user_id()
    {

        $logged_in_id = '';
        $logged_in_id = Auth::user()->id;
        return $logged_in_id;
    }
}

if (!function_exists('logged_in_user_name')) {

    function logged_in_user_name()
    {

        $logged_in_name = '';
        $logged_in_name = Auth::user()->name;
        return $logged_in_name;
    }
}

if (!function_exists('logged_in_role_id')) {

    function logged_in_role_id()
    {

        $logged_in_role_id = 0;
        if (Auth::user()->role_id) :
            $logged_in_role_id = Auth::user()->role_id;
        endif;
        return $logged_in_role_id;
    }
}

if (!function_exists('setMessage')) {

    function setMessage($key, $class, $message)
    {

        session()->flash($key, $message);
        session()->flash("class", $class);
        // session()->flash($key,'<div class="alert alert-'.$class.'">'.$message.'</div>');
        return true;
    }
}

if (!function_exists('debug_r')) {

    function debug_r($value)
    {

        echo "<pre>";
        print_r($value);
        echo "</pre>";
        die();
    }
}

if (!function_exists('debug_v')) {

    function debug_v($value)
    {

        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }
}


if (!function_exists('format_date')) {

    function format_date($value, $format = "Y-m-d h:i A")
    {
        return $value ? Carbon::parse($value)->format($format) : $value;
    }
}


if (!function_exists('settings')) {
    function settings($key = null)
    {
        if (!$key) {
            return null;
        }

        try {
            $setting = Setting::where('key', $key)->first();
            return $setting ? ($setting->value ?? "") : null;
        } catch (\Throwable $th) {
            return null;
        }
    }
}


if (!function_exists('storeBooking')) {
    function storeBooking($data_array = [], $id = null)
    {
        try {
            $data = collect($data_array)->only(['first_name', 'last_name', 'phone_number', 'email_address', 'qualification', 'desire_location', 'course_in_interest', 'certificate', 'message', 'booking_type', 'event_id'])->toArray();
            $booking = Booking::updateOrCreate(['id' => $id], $data);
            return $booking;
        } catch (\Throwable $th) {
            throw $th;
            return null;
        }
    }
}