<div class="row">
    <h3>Học kì 1</h3>
    <table id="time-table1" class="table table-bordered table-striped dataTable">
        <thead>
        <tr role="row">
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 5%;">{{ trans('admin.teach_schedule.day_period') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.mon') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.tue') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.wed') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.thu') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.fri') }}</th>
        </tr>
        </thead>
        <tbody>
        @for($p = 1; $p <= 9; $p++)
            <tr>
                <td>{{$p}}</td>
                @for($d = 2; $d <= 6; $d++)
                    <td class="schedule" data-day="{{$d}}" data-period="{{$p}}" data-toggle="tooltip" title="" data-container="body"></td>
                @endfor
            </tr>
        @endfor
        </tbody>
    </table>
</div>

<div class="row">
    <h3>Học kì 2</h3>
    <table id="time-table2" class="table table-bordered table-striped dataTable">
        <thead>
        <tr role="row">
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 5%;">{{ trans('admin.teach_schedule.day_period') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.mon') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.tue') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.wed') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.thu') }}</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">{{ trans('admin.teach_schedule.fri') }}</th>
        </tr>
        </thead>
        <tbody>
        @for($p = 1; $p <= 9; $p++)
            <tr>
                <td>{{$p}}</td>
                @for($d = 2; $d <= 6; $d++)
                    <td class="schedule" data-day="{{$d}}" data-period="{{$p}}" data-toggle="tooltip" title="" data-container="body"></td>
                @endfor
            </tr>
        @endfor
        </tbody>
    </table>
</div>
