@extends($layout)

@section('content-header')
    <h1>
        All dish types
        &middot;
        <small>{!! link_to_route('admin.staff_types.create', 'Add New') !!}</small>
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
        @foreach ($staff_types as $staff_type)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $staff_type->name !!}</td>
                <td>{!! $staff_type->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.staff_types.edit', $staff_type->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $staff_type, 'name' => 'staff_types'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($staff_types) !!}
    </div>

@stop
