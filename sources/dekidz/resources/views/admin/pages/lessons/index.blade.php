@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.lesson.all') }}
        &middot;
        <small>{!! link_to_route('admin.lessons.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.lesson.no') }}</th>
        <th>{{ trans('admin.lesson.subject_topic_id') }}</th>
        <th>{{ trans('admin.lesson.lesson_name') }}</th>
        <th>{{ trans('admin.lesson.lesson_goal') }}</th>
        <th>{{ trans('admin.lesson.teach_activity') }}</th>
        <th>{{ trans('admin.lesson.kid_activity') }}</th>
        <th>{{ trans('admin.lesson.author') }}</th>

        <th class="text-center">{{ trans('admin.public.action') }}</th>
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
                    <a href="{!! route('admin.lessons.edit', $lesson->id) !!}">{{ trans('admin.public.edit') }}</a>
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
