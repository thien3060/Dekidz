<?php

namespace App\Http\Composers;

use App\Models\DishType;

class DishFormComposer
{
    public function compose($view)
    {
        $dishtypes = DishType::lists('name', 'id');

        $view->with(compact('dishtypes'));
    }
}
