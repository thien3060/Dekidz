<?php

namespace App\Http\Composers;

use App\Models\FoodGroup;

class FoodFormComposer
{
    public function compose($view)
    {
        $foodgroups = FoodGroup::lists('name', 'id');

        $view->with(compact('foodgroups'));
    }
}
