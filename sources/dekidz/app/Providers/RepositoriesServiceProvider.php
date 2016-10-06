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
        'DekidzClass',
        'Dish',
        'Food',
        'FoodSet'
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

}
