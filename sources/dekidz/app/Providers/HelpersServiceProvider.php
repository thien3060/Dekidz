<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('dateHelper', function()
        {
            return new \App\Helpers\DateHelper;
        });

        $this->app->bind('permissionHelper', function()
        {
            return new \App\Helpers\PermissionHelper;
        });
    }
}
