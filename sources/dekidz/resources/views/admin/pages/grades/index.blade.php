@extends($layout)

@section('content-header')
    <h1>
        All Grades
        &middot;
        <small>{!! link_to_route('admin.grades.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($grades as $grade)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $grade->name !!}</td>
                <td>{!! $grade->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.grades.edit', $grade->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $grade, 'name' => 'grades'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($grades) !!}
    </div>
@stop
