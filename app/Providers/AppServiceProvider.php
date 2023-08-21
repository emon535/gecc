<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Stevebauman\Location\Facades\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $country_code =  'undefined';
        $ip =  request()->ip();
        // $ip =  $_SERVER['REMOTE_ADDR'];  
        // $ip =  '103.35.171.129'; // Dhaka
        $ip =  '114.31.22.156'; // Sylhet
        // dd(Location::get($ip));
        $city_name = null;
        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            $country_code = $position->countryCode;
            $city_name = $position->cityName;
        } else {
            $country_code = 'undefined';
        }
        $get_default = DB::table('tbl_office_address')->where('is_default', 1)->first();
        $get_regional_office = DB::table('tbl_office_address')->where([
            ['code', $country_code],
            ['region_name', $city_name],
        ])->first();
        $get_office = DB::table('tbl_office_address')->where('code', $country_code)->first();

        $address = null;

        if ($get_regional_office) {
            $address = $get_regional_office;
        } elseif (!$get_regional_office && $get_office) {
            $address = $get_office;
        } elseif (!$get_regional_office && !$get_office && $get_default) {
            $address = $get_default;
        }

        // Events
        $event = DB::table('tbl_event')
            ->where(function ($q) {
                $q->whereDate('date', '>', Carbon::now()->format('Y-m-d'))
                    ->orWhere(function ($iq) {
                        $iq->whereDate('date', '=', Carbon::now()->format('Y-m-d'))
                            ->whereTime('time', '>=', Carbon::now()->format('H:i'));
                    });
            })
            ->first();

        View::share('address', $address);
        View::share('has_event', $event ? true : false);
    }
}