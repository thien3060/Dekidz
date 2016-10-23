@extends($layout)

@section('content-header')
    <h1>
        All Subject topics
        &middot;
        <small>{!! link_to_route('admin.subject_topics.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Code</th>
        <th>Name</th>
        <th>Description</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($subject_topics as $subject_topic)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $subject_topic->code !!}</td>
                <td>{!! $subject_topic->name !!}</td>
                <td>{!! $subject_topic->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.subject_topics.edit', $subject_topic->id) !!}">Edit</a>
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
