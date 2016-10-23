@extends($layout)

@section('content-header')
    <h1>
        Detail Info
        &middot;
        <small>{!! link_to_route('admin.lessons.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')
    <table>
        <tr>
            <td>Name: </td>
            <td>{{$lesson->name}}</td>
        </tr>
        <tr>
            <td>Subject topic: </td>
            <td>{{$lesson->subject_topic_id}}</td>
        </tr>
        <tr>
            <td>Lesson name: </td>
            <td>{{$lesson->lesson_name}}</td>
        </tr>
        <tr>
            <td>Lesson goal: </td>
            <td>{{$lesson->lesson_goal}}</td>
        </tr>
        <tr>
            <td>Kid activity: </td>
            <td>{{$lesson->kid_activity}}</td>
        </tr>
        <tr>
            <td>Teach activity: </td>
            <td>{{$lesson->teach_activity}}</td>
        </tr>
        <tr>
            <td>Author: </td>
            <td>{{$lesson->author}}</td>
        </tr>
    </table>
@stop

@section('script')

@endsection