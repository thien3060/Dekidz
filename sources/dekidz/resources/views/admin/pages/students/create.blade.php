@extends($layout)

@section('content-header')
    <h1>
        Add New Student
        &middot;
        <small>{!! link_to_route('admin.students.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.students.form')
    </div>

@stop
