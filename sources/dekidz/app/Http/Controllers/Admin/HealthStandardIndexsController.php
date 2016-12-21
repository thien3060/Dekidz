<?php

namespace App\Http\Controllers\Admin;

use App\Models\HealthStandardIndex;
use App\Models\Student;
use App\Validation\PhysicalInfo\CreateRequest;
use App\Validation\PhysicalInfo\UpdateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class HealthStandardIndexsController extends BaseController
{
    public function index(Request $request){
        $students = Student::all();
        $height_data = [];
        $weight_data = [];
        $current_student = $students->first();
        $health_index = HealthStandardIndex::all()->keyBy('month');
        foreach ($current_student->physical_info as $info){
            array_push($height_data,['y' => $info->age, 'item1' => $info->height, 'item2' => $health_index[$info->age]->height]);
        }
        dd($height_data);
        $height_data = [
            ['y' => '2011 Q1', 'item1'=> 2666, 'item2'=> 2666],
            ['y'=> '2011 Q2', 'item1'=> 2778, 'item2'=> 2294],
            ['y'=> '2011 Q3', 'item1'=> 4912, 'item2'=> 1969],
            ['y'=> '2011 Q4', 'item1'=> 3767, 'item2'=> 3597],
            ['y'=> '2012 Q1', 'item1'=> 6810, 'item2'=> 1914],
            ['y'=> '2012 Q2', 'item1'=> 5670, 'item2'=> 4293],
            ['y'=> '2012 Q3', 'item1'=> 4820, 'item2'=> 3795],
            ['y'=> '2012 Q4', 'item1'=> 15073, 'item2'=> 5967],
            ['y'=> '2013 Q1', 'item1'=> 10687, 'item2'=> 4460],
            ['y'=> '2013 Q2', 'item1'=> 8432, 'item2'=> 5713]
        ];

        $weight_data = [
            ['y' => '2011 Q1', 'item1'=> 2666, 'item2'=> 2666],
            ['y'=> '2011 Q2', 'item1'=> 2778, 'item2'=> 2294],
            ['y'=> '2011 Q3', 'item1'=> 4912, 'item2'=> 1969],
            ['y'=> '2011 Q4', 'item1'=> 3767, 'item2'=> 3597],
            ['y'=> '2012 Q1', 'item1'=> 6810, 'item2'=> 1914],
            ['y'=> '2012 Q2', 'item1'=> 5670, 'item2'=> 4293],
            ['y'=> '2012 Q3', 'item1'=> 4820, 'item2'=> 3795],
            ['y'=> '2012 Q4', 'item1'=> 15073, 'item2'=> 5967],
            ['y'=> '2013 Q1', 'item1'=> 10687, 'item2'=> 4460],
            ['y'=> '2013 Q2', 'item1'=> 8432, 'item2'=> 5713]
        ];
        return $this->view('pages.health_standard_index.index', compact('students', 'height_data', 'weight_data', 'health_index', 'current_student'));
    }
    
    public function getHealthIndex(Request $request){
        return "hello";
    }
}
