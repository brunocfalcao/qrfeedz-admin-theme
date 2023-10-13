<?php

namespace Brunocfalcao\QrfeedzAdminTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class AdminThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'qrfeedz-admin-theme'
        );

        Nova::footer(function ($request) {
            return view('qrfeedz-admin-theme::partials.footer')->render();
        });

        Nova::serving(function (ServingNova $event) {
            //Nova::script('qrfeedz-admin-theme', __DIR__.'/../dist/js/asset.js');
            Nova::style('qrfeedz-admin-theme', __DIR__.'/../dist/css/asset.css');
        });
    }

    public function register()
    {
        //
    }
}
