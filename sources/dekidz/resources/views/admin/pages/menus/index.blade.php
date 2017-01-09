@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.menu.all')}}
        &middot;
        <small>{!! link_to_route('admin.menus.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.menu.no')}}</th>
        <th>{{trans('admin.menu.date')}}</th>
        <th>{{trans('admin.menu.breakfast_id')}}</th>
        <th>{{trans('admin.menu.lunch_id')}}</th>
        <th>{{trans('admin.menu.mid_afternoon_id')}}</th>
        <th>{{trans('admin.menu.created_at')}}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($menus as $menu)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $menu->date !!}</td>
                <td>{!! $breakfast[$menu->breakfast_id]['name'] !!}</td>
                <td>{!! $lunch[$menu->lunch_id]['name'] !!}</td>
                <td>{!! $mid_afternoon[$menu->mid_afternoon_id]['name'] !!}</td>
                <td>{!! $menu->created_at !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.menus.edit', $menu->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $menu, 'name' => 'menus'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($menus) !!}
    </div>
@stop
