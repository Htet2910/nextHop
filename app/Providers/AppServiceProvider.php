<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use View;
use DB;

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
       View::composer('*', function($view)
        {
            $nav=DB::table('navbars')->get();  
            foreach ($nav as $key => $value) {
               $value->nav_name=Str::upper($value->nav_name);
            } 

            $add=DB::table('contacts')->get();
            $about_detail = DB::table('abouts')->get();
            $service_detail = DB::table('services')->get();
            foreach ($service_detail  as $key => $value) {
                $value->body=strip_tags($value->body);
            }
            $partner_detail = DB::table('partners')->get();


            $view->with('nav', $nav);
            $view->with('add', $add);
            $view->with('about_detail',  $about_detail);
            $view->with('service_detail',  $service_detail);
            $view->with('partner_detail',  $partner_detail);

        });
    }
}
