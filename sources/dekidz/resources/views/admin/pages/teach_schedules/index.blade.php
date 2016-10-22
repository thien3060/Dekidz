@extends($layout)

@section('content-header')
    <h1>
        All Students
        &middot;
        <small>{!! link_to_route('admin.teach_schedules.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Day</th>
        <th>Date</th>
        <th>Class</th>
        <th>Morning Lesson</th>
        <th>Morning Teacher</th>
        <th>Afternoon Lesson</th>
        <th>Afternoon Teacher</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($teach_schedules as $teach_schedule)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $teach_schedule->day !!}</td>
                <td>{!! $teach_schedule->date !!}</td>
                <td>{!! $teach_schedule->class_id !!}</td>
                <td>{!! $teach_schedule->morning_lesson_id !!}</td>
                <td>{!! $teach_schedule->morning_teacher_id !!}</td>
                <td>{!! $teach_schedule->afternoon_lesson_id !!}</td>
                <td>{!! $teach_schedule->afternoon_teacher_id !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.teach_schedules.edit', $teach_schedule->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $teach_schedule, 'name' => 'teach_schedules'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($teach_schedules) !!}
    </div>
@stop
