<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $webNamespace = 'App\Http\Controllers\FrontEnd';

    protected $adminNamespace = 'App\Http\Controllers\Admin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        /*
        |--------------------------------------------------------------------------
        | Web Router
        |--------------------------------------------------------------------------
        */

        $router->group(['namespace' => $this->webNamespace], function ($router) {
            require app_path('Http/routes.web.php');
        });

        /*
        |--------------------------------------------------------------------------
        | Api Router
        |--------------------------------------------------------------------------
        */

        $router->group(['prefix' => config('admin.prefix', 'admin'), 'namespace' => $this->adminNamespace], function ($router) {
            require app_path('Http/routes.admin.php');
        });
    }
}
