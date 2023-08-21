<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use View;
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
        $country_code =  'undifind';
        $ip =  $_SERVER['REMOTE_ADDR'];  
        //$ip =  '103.35.171.129';  

        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            $country_code = $position->countryCode;
        } else {
            $country_code = 'undifind';
        }
        $get_defolt = DB::table('tbl_office_address')->where('is_default',1)->first();
        $get_office = DB::table('tbl_office_address')->where('code',$country_code)->first();
      //dd($get_defolt,$get_office);
        $address = null;

        if($get_office!=null){
            $address =    $get_office;
        }else{
            if($get_defolt!=null){
                $address = $get_defolt;
            }else{
                $address =  null;
            }   
        }


        View::share('address', $address);
    }
}
