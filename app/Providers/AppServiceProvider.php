<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
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
        //
        Validator::extend('phone_number', function($attribute, $value, $parameters)
        {

            return substr($value, 0, 2) == '01';
        });
        Validator::extend('phone_number_length', function($attribute, $value, $parameters)
        {

            return strlen($value) == 11;
        });
    }
}
