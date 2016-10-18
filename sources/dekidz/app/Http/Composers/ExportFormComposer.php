<?php

namespace App\Http\Composers;

use App\Models\Food;

class ExportFormComposer
{
    public function compose($view)
    {
        $assets = Food::lists('name', 'id');

        $view->with(compact('assets'));
    }
}
