<?php

namespace App\Http\Composers;

use App\Models\Asset;

class ExportAssetFormComposer
{
    public function compose($view)
    {
        $assets = Asset::lists('name', 'id');

        $view->with(compact('assets'));
    }
}
