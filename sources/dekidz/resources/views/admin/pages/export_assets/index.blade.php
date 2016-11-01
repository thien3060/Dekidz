@extends($layout)

@section('content-header')
    <h1>
        All Exports
        &middot;
        <small>{!! link_to_route('admin.export_assets.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Export Date</th>
        <th>Created By</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($export_assets as $export_asset)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $export_asset->date !!}</td>
                <td>{!! $export_asset->created_by !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.export_assets.edit', $export_asset->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $export_asset, 'name' => 'export_assets'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($export_assets) !!}
    </div>
@stop
