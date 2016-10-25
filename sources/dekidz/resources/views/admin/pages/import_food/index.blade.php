@extends($layout)

@section('content-header')
    <h1>
        All Imports
        &middot;
        <small>{!! link_to_route('admin.import_food.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Import Date</th>
        <th>Cost</th>
        <th>Created By</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($imports as $import)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $import->date !!}</td>
                <td>{!! $import->cost !!}</td>
                <td>{!! $import->created_by !!}</td>
                <td>{!! $import->created_at !!}</td>
                <td>{!! $import->updated_at !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.import_food.edit', $import->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $import, 'name' => 'import_food'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($imports) !!}
    </div>
@stop
