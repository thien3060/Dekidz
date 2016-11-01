<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $entities = [
        'Student',
        'Grade',
        'PhysicalInfo',
        'Staff',
        'StaffType',
        'Salary',
        'Department',
        'RemIn',
        'RemOut',
        'DekidzClass',
        'SubjectTopic',
        'Dish',
        'Food',
        'FoodSet',
        'ImportFood',
        'ImportAsset',
        'Asset',
        'Supplier',
        'Export',
        'ExportAsset',
        'FoodGroup',
        'FoodSetType',
        'DishType',
        'TeachSchedule',
        'EnergyNeed',
        'TuitionFee',
        'Lesson',
        'MaintenanceBallot',
        'StudyResult'
    ];

    /**
     * Register the service provider.
     */
    public function register()
    {
        foreach ($this->entities as $entity) {
            $this->app->bind(
                'App\Repositories\Contracts\\' . $entity . 'Repository',
                'App\Repositories\Eloquent\Eloquent' . $entity . 'Repository'
            );
        }
    }
}
