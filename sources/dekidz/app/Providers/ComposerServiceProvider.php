<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    protected $composers = [
        'admin.pages.*' => 'App\Http\Composers\LayoutComposer',
        'admin.pages.imports.create' => 'App\Http\Composers\ImportFormComposer',
        'admin.pages.imports.edit' => 'App\Http\Composers\ImportFormComposer',
        'admin.pages.foodsets.create' => 'App\Http\Composers\FoodSetFormComposer',
        'admin.pages.foodsets.edit' => 'App\Http\Composers\FoodSetFormComposer',
        'admin.pages.exports.create' => 'App\Http\Composers\ExportFormComposer',
        'admin.pages.exports.edit' => 'App\Http\Composers\ExportFormComposer',
        'admin.pages.foods.create' => 'App\Http\Composers\FoodFormComposer',
        'admin.pages.foods.edit' => 'App\Http\Composers\FoodFormComposer',
        'admin.pages.foodsets.edit' => 'App\Http\Composers\FoodSetFormComposer',

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
