<?php

namespace App\Http\Composers;

use App\Models\DishType;
use App\Models\Food;

class DishFormComposer
{
    public function compose($view)
    {
        $dishtypes = DishType::lists('name', 'id');

        $view->with(compact('dishtypes'));

        $foods = Food::lists('name', 'id');

        $view->with(compact('foods'));


    }
}
