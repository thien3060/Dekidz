<?php

namespace App\Http\Controllers\Admin;

use App\Models\RemIn;
use App\Models\RemOut;
use App\Validation\Asset\CreateRequest;
use App\Validation\Asset\UpdateRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use Illuminate\Http\Response;
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
}
