@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.lesson.create') }}
        &middot;
        <small>{!! link_to_route('admin.lessons.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.lessons.form')
    </div>

@stop
