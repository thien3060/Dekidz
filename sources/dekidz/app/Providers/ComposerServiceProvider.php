<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    protected $composers = [
        'admin.pages.*' => 'App\Http\Composers\LayoutComposer',
        'admin.pages.imports.create' => 'App\Http\Composers\ImportFormComposer',
        'admin.pages.imports.edit' => 'App\Http\Composers\ImportFormComposer'
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->composers as $view=>$composer){
            View::composer($view, $composer);
        }
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
