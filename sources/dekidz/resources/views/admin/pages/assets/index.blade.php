@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.assets.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{ trans('admin.asset.no') }}</th>
        <th>{{ trans('admin.asset.name') }}</th>
        <th>{{ trans('admin.asset.quantity') }}</th>
        <th>{{ trans('admin.asset.maintenance_mode') }}</th>
        <th>{{ trans('admin.asset.unit') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($assets as $asset)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $asset->name !!}</td>
                <td>{!! $asset->quantity !!}</td>
                <td>{!! $asset->maintenance_mode !!}</td>
                <td>{!! $asset->unit !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.assets.edit', $asset->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $asset, 'name' => 'assets'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($assets) !!}
    </div>

@stop
