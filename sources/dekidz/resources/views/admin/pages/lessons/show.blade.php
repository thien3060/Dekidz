@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.lesson.all') }}
        &middot;
        <small>{!! link_to_route('admin.lessons.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')
    <table>
        <tr>
            <td>{{ trans('admin.lesson.lesson_name') }}: </td>
            <td>{{$lesson->name}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.subject_topic_id') }}: </td>
            <td>{{$lesson->subject_topic_id}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.lesson_name') }}: </td>
            <td>{{$lesson->lesson_name}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.lesson_goal') }}: </td>
            <td>{{$lesson->lesson_goal}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.kid_activity') }}: </td>
            <td>{{$lesson->kid_activity}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.teach_activity') }}: </td>
            <td>{{$lesson->teach_activity}}</td>
        </tr>
        <tr>
            <td>{{ trans('admin.lesson.author') }}: </td>
            <td>{{$lesson->author}}</td>
        </tr>
    </table>
@stop

@section('script')

@endsection