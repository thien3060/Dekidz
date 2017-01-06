@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.public.all') }}
        &middot;
        <small>{!! link_to_route('admin.classes.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{trans('admin.class.no')}}</th>
        <th>{{trans('admin.class.name')}}</th>
        <th>{{trans('admin.class.grade_id')}}</th>
        <th>{{trans('admin.class.teacher_id')}}</th>
        <th>{{trans('admin.class.room_number')}}</th>
        <th>{{trans('admin.class.school_year')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
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
                    <a href="{!! route('admin.classes.edit', $class->id) !!}">{{trans('admin.public.edit')}}</a>
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
