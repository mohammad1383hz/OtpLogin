<?php
namespace App\Packages\Otp\Src\OtpServiceProvider;

use App\Packages\Otp\Src\OtpService;
use Illuminate\Support\ServiceProvider;


class OtpServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Otp',function(){
            return new OtpService;
        });
        // $this->mergeConfigFrom(__DIR__.'/../config/otp.php','otp');
    }
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/s');
        $this->loadRoutesFrom(__DIR__.'/../routes/otp.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','otp');
        //TODO publish
    }
}
