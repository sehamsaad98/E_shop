<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        if(!app()->runningInConsole()){
          $setting=Setting::firstOr(function(){
            //            return 'default';
            return Setting::create([
              'name'=>'site_name',
              //            'logo'=>'',
              'desc'=>'laravel '
            ]);
          });
          view()->share('setting' , $setting);
          }
    }
}
