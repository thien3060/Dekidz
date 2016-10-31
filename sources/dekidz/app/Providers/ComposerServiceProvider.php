<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    protected $composers = [
        'admin.pages.*' => 'App\Http\Composers\LayoutComposer',
        'admin.pages.import_food.*' => 'App\Http\Composers\ImportFormComposer',
        'admin.pages.import_asset.*' => 'App\Http\Composers\ImportFormComposer',
        'admin.pages.foodsets.*' => 'App\Http\Composers\FoodSetFormComposer',
        'admin.pages.exports.*' => 'App\Http\Composers\ExportFormComposer',
        'admin.pages.classes.*' => 'App\Http\Composers\ClassFormComposer',
        'admin.pages.export_assets.*' => 'App\Http\Composers\ExportAssetFormComposer',
        'admin.pages.foods.*' => 'App\Http\Composers\FoodFormComposer',
        'admin.pages.dishes.*' => 'App\Http\Composers\DishFormComposer',
        'admin.pages.lessons.*' => 'App\Http\Composers\LessonFormComposer',
        'admin.pages.physical_infos.*' => 'App\Http\Composers\PhysicalInfoFormComposer',
        'admin.pages.teach_schedules.*' => 'App\Http\Composers\TeachScheduleFormComposer',
        'admin.pages.tuition_fees.*' => 'App\Http\Composers\TuitionFeeFormComposer',
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
