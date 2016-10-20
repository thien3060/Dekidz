<?php

namespace App\Http\Composers;

use App\Models\Dish;
use App\Models\FoodSetType;

class FoodSetFormComposer
{
    public function compose($view)
    {
        $assets = Dish::lists('name', 'id');

        $view->with(compact('assets'));

        $foodsettypes = FoodSetType::lists('name', 'id');

        $view->with(compact('foodsettypes'));
    }
}
