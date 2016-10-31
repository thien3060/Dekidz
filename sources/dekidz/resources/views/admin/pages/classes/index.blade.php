@extends($layout)

@section('content-header')
    <h1>
        All classes
        &middot;
        <small>{!! link_to_route('admin.classes.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Teacher name</th>
        <th>Room number</th>
        <th>School Year</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($classes as $class)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $class->name !!}</td>
                <td>{!! $grades[$class->grade_id] !!}</td>
                <td>{!! $staffs[$class->teacher_id] !!}</td>
                <td>{!! $class->room_number !!}</td>
                <td>{!! $class->school_year !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.classes.edit', $class->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $class, 'name' => 'classes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($classes) !!}
    </div>

@stop
