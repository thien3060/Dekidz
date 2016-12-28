@extends($layout)

@section('content-header')
    <h1>
        All Asset Imports
        &middot;
        <small>{!! link_to_route('admin.import_asset.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Import Date</th>
        <th>Cost</th>
        <th>Created By</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($imports as $import)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $import->date !!}</td>
                <td>{!! $import->total_cost !!}</td>
                <td>{!! $users[$import->created_by] !!}</td>
                <td class="text-center">
                    @include('admin::partials.modal', ['data' => $import, 'name' => 'import_asset'])
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
