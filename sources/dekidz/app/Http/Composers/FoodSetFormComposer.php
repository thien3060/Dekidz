<?php

namespace App\Http\Composers;

use App\Models\Dish;

class ImportFormComposer
{
    public function compose($view)
    {
        $assets = Dish::lists('name', 'id');

        $view->with(compact('assets'));
    }
}
