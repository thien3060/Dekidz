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
        'admin.pages.exports.*' => 'App\Http\Composers\ExportFormComposer',
        'admin.pages.export_assets.*' => 'App\Http\Composers\ExportAssetFormComposer',
        'admin.pages.foods.create' => 'App\Http\Composers\FoodFormComposer',
        'admin.pages.foods.edit' => 'App\Http\Composers\FoodFormComposer',
        'admin.pages.dishes.create' => 'App\Http\Composers\DishFormComposer',
        'admin.pages.dishes.edit' => 'App\Http\Composers\DishFormComposer',
        'admin.pages.lessons.*' => 'App\Http\Composers\LessonFormComposer',
        'admin.pages.teach_schedules.*' => 'App\Http\Composers\TeachScheduleFormComposer',
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
