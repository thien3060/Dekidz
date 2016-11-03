<?php

namespace App\Http\Composers;

use App\Models\DekidzClass;
use App\Models\FoodSet;
use App\Models\Lesson;
use App\Models\Staff;
use App\Models\SubjectTopic;
use Illuminate\Support\Facades\DB;

class MenuFormComposer
{
    public function compose($view)
    {
        $breakfast = FoodSet::whereHas('type', function ($query){
            $query->where('name', '=', 'breakfast');
        })->get()->getDictionary();

        $lunch = FoodSet::whereHas('type', function ($query){
            $query->where('name', '=', 'lunch');
        })->get()->getDictionary();

        $mid_afternoon = FoodSet::whereHas('type', function ($query){
            $query->where('name', '=', 'mid_afternoon');
        })->get()->getDictionary();

        $nutritional_requirements = collect(DB::table('nutritional_requirements')
            ->get())
            ->keyBy('age');

        $view->with(compact('breakfast', 'lunch', 'mid_afternoon', 'nutritional_requirements'));
    }
}
