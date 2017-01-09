<?php

namespace App\Http\Controllers\Admin;

use App\Models\DekidzClass;
use App\Models\RemIn;
use App\Models\RemOut;
use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ReportsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function remReport()
    {
        $to = Carbon::now()->startOfDay();
        $from = Carbon::now()->subDay(90)->startOfDay();
        $rem_ins = RemIn::where('date', '>=', $from)->orderBy('date', 'asc')->get();
        $total_in = RemIn::where('date', '>=', $from)->sum('total');
        $rem_outs = RemOut::where('date', '>=', $from)->orderBy('date', 'asc')->get();
        $total_out = RemOut::where('date', '>=', $from)->sum('total');
        return $this->view('pages.reports.rem_report', compact('from', 'to', 'rem_ins', 'total_in', 'rem_outs', 'total_out'));
    }
    
    public function ageReport()
    {
        $classes = DekidzClass::lists('name', 'id');
        $class_id = Input::get('class_id', 0);
        $class = null;
        if($class_id != 0){
            $class = DekidzClass::where('id', '=', $class_id)->first();
        }
        return $this->view('pages.reports.age_report', compact('class', 'classes'));
    }
}
