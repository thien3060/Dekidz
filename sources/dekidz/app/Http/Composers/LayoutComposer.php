<?php
/**
 * Created by PhpStorm.
 * User: cod1
 * Date: 9/29/2016
 * Time: 9:51 AM
 */

namespace App\Http\Composers;


class LayoutComposer
{
    public function compose($view)
    {
        $layout = config('admin.views.layout', 'admin::layouts.master');

        $view->with(compact('layout'));
    }
}