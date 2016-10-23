@extends($layout)

@section('content-header')
    <h1>
        Add New Lesson
        &middot;
        <small>{!! link_to_route('admin.lessons.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.lessons.form')
    </div>

@stop
