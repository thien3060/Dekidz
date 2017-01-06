@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.export_assets.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.export_asset.no')}}</th>
        <th>{{trans('admin.export_asset.date')}}</th>
        {{--<th>Created By</th>--}}
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($export_assets as $export_asset)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $export_asset->date !!}</td>
                {{--<td>{!! $users[$export_asset->created_by] !!}</td>--}}
                <td class="text-center">
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
