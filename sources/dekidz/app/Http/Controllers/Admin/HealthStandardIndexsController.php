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


        return $this->view('pages.health_standard_index.index', compact('students'));
    }
    
    public function getHealthIndex(Request $request){
        $info_table = '';
        $height_data = $weight_data = [];
        $health_index = HealthStandardIndex::all();

        $current_student = Student::find($request->input('student_id'));
        if($current_student != null){
            $info_table = (String)view('admin.pages.health_standard_index.info_table', compact('current_student', 'health_index'));
            if(count($current_student->physical_info)){
                foreach ($current_student->physical_info as $info){
                    $index = $health_index->filter(function($item) use($info, $current_student){
                        return $item->month == $info->age && $item->gender == $current_student->gender;
                    })->first();
                    array_push($height_data,['y' => 'Thang '.$info->age, 'item1' => $info->height, 'item2' => $index->height]);
                    array_push($weight_data,['y' => 'Thang '.$info->age, 'item1' => $info->weight, 'item2' => $index->weight]);
                }
            }
        }
        return ['info-table' => $info_table,
            'height_data' => $height_data,
            'weight_data' => $weight_data
        ];
    }
}
