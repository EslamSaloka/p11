<?php
namespace Eslam\Paytabs;

use Illuminate\Support\ServiceProvider;

class PayTabsServProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../route/saloka.php';
        // php artisan vendor:publish --tag=paytabs --force
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path(),
            __DIR__.'/../controller/PayController.php' => app_path('Http/Controllers/'),
        ],'paytabs');
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
