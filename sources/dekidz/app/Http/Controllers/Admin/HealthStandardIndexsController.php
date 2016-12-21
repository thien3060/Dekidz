<?php

namespace App\Http\Controllers\Admin;

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
        return "hello";
    }
}
