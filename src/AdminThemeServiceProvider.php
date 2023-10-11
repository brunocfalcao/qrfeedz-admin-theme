<?php

namespace Brunocfalcao\QrfeedzAdminTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class AdminThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('qrfeedz-admin-theme', __DIR__.'/../dist/js/asset.js');
            Nova::style('qrfeedz-admin-theme', __DIR__.'/../dist/css/asset.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
