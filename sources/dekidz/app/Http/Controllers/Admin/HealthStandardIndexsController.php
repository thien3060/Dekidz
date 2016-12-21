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
        $health_index = HealthStandardIndex::all();
        foreach ($current_student->physical_info as $info){
            $index = $health_index->filter(function($item) use($info){
                return $item->month == $info->age && $item->gender == 1;
            })->first();
            array_push($height_data,['y' => 'Thang '.$info->age, 'item1' => $info->height, 'item2' => $index->height]);
            array_push($weight_data,['y' => 'Thang '.$info->age, 'item1' => $info->weight, 'item2' => $index->weight]);
        }

        return $this->view('pages.health_standard_index.index', compact('students', 'height_data', 'weight_data', 'health_index', 'current_student'));
    }
    
    public function getHealthIndex(Request $request){
        return "hello";
    }
}
