<?php

namespace App\Http\Composers;

use App\Models\Asset;
use App\Models\Food;
use Pingpong\Admin\Entities\User;

class ImportFormComposer
{
    public function compose($view)
    {
        $foods = Food::lists('name', 'id');
        $assets = Asset::lists('name', 'id');
        $users = User::lists('name', 'id');

        $view->with(compact('assets', 'foods', 'users'));
    }
}
