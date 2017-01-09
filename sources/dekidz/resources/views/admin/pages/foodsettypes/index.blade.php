@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.food_set_type.all')}}
        &middot;
        <small>{!! link_to_route('admin.foodsettypes.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{ trans('admin.food_set_type.no') }}</th>
        <th>{{ trans('admin.food_set_type.code') }}</th>
        <th>{{ trans('admin.food_set_type.name') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($foodsettypes as $foodsettype)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $foodsettype->code !!}</td>
                <td>{!! $foodsettype->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foodsettypes.edit', $foodsettype->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $foodsettype, 'name' => 'foodsettypes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($foodsettypes) !!}
    </div>

@stop
