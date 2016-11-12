@extends($layout)

@section('content-header')
    <h1>
        All Departments
        &middot;
        <small>{!! link_to_route('admin.departments.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $department->name !!}</td>
                <td>{!! $department->description !!}</td>
                <td>{!! $department->created_at !!}</td>
                <td>{!! $department->updated_at !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.departments.edit', $department->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $department, 'name' => 'departments'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($departments) !!}
    </div>
@stop
