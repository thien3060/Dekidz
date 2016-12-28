<?php

namespace App\Http\Composers;

use App\Models\Food;

class ExportFormComposer
{
    public function compose($view)
    {
        $assets = Food::where('quantity', '>', 0)->lists('name', 'id');

        $view->with(compact('assets'));
    }
}
