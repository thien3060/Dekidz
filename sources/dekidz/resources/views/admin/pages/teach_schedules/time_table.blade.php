<table id="time-table" class="table table-bordered table-striped dataTable">
    <thead>
        <tr role="row">
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 5%;">Day/Period</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">Mon</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">Tue</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">Wed</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">Thu</th>
            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 19%;">Fri</th>
        </tr>
    </thead>
    <tbody>
        @for($p = 1; $p <= 9; $p++)
            <tr>
                <td>{{$p}}</td>
                @for($d = 2; $d <= 6; $d++)
                    @foreach($schedules as $schedule)
                        @if($schedule->day == $d & $schedule->period == $p)
                            <td class="schedule" data-day="{{$d}}" data-period="{{$p}}">Teacher: {{$schedule->teacher}} <br> Lesson: {{$schedule->lesson}}</td>
                        @endif
                    @endforeach
                @endfor
            </tr>
        @endfor
    </tbody>
</table>