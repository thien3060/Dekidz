<?php

namespace App\Http\Composers;

use App\Models\Dish;
use App\Models\FoodSetType;

class FoodSetFormComposer
{
    public function compose($view)
    {
        $list = Dish::all()->toArray();
        $assets = array();
        foreach ($list as $item) {
            $assets[$item['id']] = $item;
        }
        //$assets = Dish::lists('name', 'id');

        $view->with(compact('assets'));

        $foodsettypes = FoodSetType::lists('name', 'id');

        $view->with(compact('foodsettypes'));
    }
}
