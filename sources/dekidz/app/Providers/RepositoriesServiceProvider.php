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
        'PhysicalInfo',
        'Staff',
        'Salary',
        'Department',
        'RemIn',
        'RemOut',
        'DekidzClass',
        'Dish',
        'Food',
        'FoodSet',
        'Import',
        'Asset',
        'Supplier',
        'Export'
    ];

    /**
     * Register the service provider.
     */
    public function register()
    {
        foreach ($this->entities as $entity) {
            $this->{'bind'.$entity.'Repository'}();
        }
    }

    protected function bindStudentRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\StudentRepository',
            'App\Repositories\Eloquent\EloquentStudentRepository'
        );
    }

    protected function bindPhysicalInfoRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\PhysicalInfoRepository',
            'App\Repositories\Eloquent\EloquentPhysicalInfoRepository'
        );
    }

    protected function bindStaffRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\StaffRepository',
            'App\Repositories\Eloquent\EloquentStaffRepository'
        );
    }

    protected function bindSalaryRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\SalaryRepository',
            'App\Repositories\Eloquent\EloquentSalaryRepository'
        );
    }

    protected function bindDepartmentRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\DepartmentRepository',
            'App\Repositories\Eloquent\EloquentDepartmentRepository'
        );
    }

    protected function bindRemInRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\RemInRepository',
            'App\Repositories\Eloquent\EloquentRemInRepository'
        );
    }

    protected function bindRemOutRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\RemOutRepository',
            'App\Repositories\Eloquent\EloquentRemOutRepository'
        );
    }

    protected function bindDekidzClassRepository() {
        $this->app->bind(
            'App\Repositories\Contracts\DekidzClassRepository',
            'App\Repositories\Eloquent\EloquentDekidzClassRepository'
        );
    }

    protected function bindDishRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\DishRepository',
            'App\Repositories\Eloquent\EloquentDishRepository'
        );
    }

    protected function bindFoodRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\FoodRepository',
            'App\Repositories\Eloquent\EloquentFoodRepository'
        );
    }


    protected function bindFoodSetRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\FoodSetRepository',
            'App\Repositories\Eloquent\EloquentFoodSetRepository'
        );
    }

    protected function bindImportRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ImportRepository',
            'App\Repositories\Eloquent\EloquentImportRepository'
        );
    }

    protected function bindExportRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ExportRepository',
            'App\Repositories\Eloquent\EloquentExportRepository'
        );
    }

    protected function bindAssetRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\AssetRepository',
            'App\Repositories\Eloquent\EloquentAssetRepository'
        );
    }

    protected function bindSupplierRepository()
    {
        $this->app->bind(
            'App\Repositories\Contracts\SupplierRepository',
            'App\Repositories\Eloquent\EloquentSupplierRepository'
        );
    }

}
