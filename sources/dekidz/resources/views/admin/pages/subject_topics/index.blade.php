@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.subject_topic.all') }}
        &middot;
        <small>{!! link_to_route('admin.subject_topics.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.subject_topic.no') }}</th>
        <th>{{ trans('admin.subject_topic.code') }}</th>
        <th>{{ trans('admin.subject_topic.name') }}</th>
        <th>{{ trans('admin.subject_topic.description') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($subject_topics as $subject_topic)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $subject_topic->code !!}</td>
                <td>{!! $subject_topic->name !!}</td>
                <td>{!! $subject_topic->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.subject_topics.edit', $subject_topic->id) !!}">{{ trans('admin.public.edit') }}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $subject_topic, 'name' => 'subject_topics'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($subject_topics) !!}
    </div>
@stop
