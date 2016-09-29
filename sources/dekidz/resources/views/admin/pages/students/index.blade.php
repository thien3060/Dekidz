@extends($layout)

@section('content-header')
    <h1>
        All Students
        &middot;
        <small>{!! link_to_route('admin.students.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Title</th>
        <th>Author</th>
        <th>Created At</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>

        </tbody>
    </table>
@stop
