@extends($layout)

@section('content-header')
    <h1>
        All Lessons
        &middot;
        <small>{!! link_to_route('admin.lessons.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Subject Topic</th>
        <th>Lesson name</th>
        <th>Lesson goal</th>
        <th>Kid activity</th>
        <th>Teach activity</th>
        <th>Author</th>

        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($lessons as $lesson)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $subject_topics[$lesson->subject_topic_id] !!}</td>
                <td>{!! $lesson->lesson_name !!}</td>
                <td>{!! $lesson->lesson_goal !!}</td>
                <td>{!! $lesson->teach_activity !!}</td>
                <td>{!! $lesson->kid_activity !!}</td>
                <td>{!! $lesson->author !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.lessons.edit', $lesson->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $lesson, 'name' => 'lessons'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($lessons) !!}
    </div>
@stop
