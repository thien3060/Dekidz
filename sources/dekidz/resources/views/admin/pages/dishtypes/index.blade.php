@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.dishtypes.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{trans('admin.dish_type.no')}}</th>
        <th>{{trans('admin.dish_type.code')}}</th>
        <th>{{trans('admin.dish_type.name')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($dishtypes as $dishtype)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $dishtype->code !!}</td>
                <td>{!! $dishtype->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.dishtypes.edit', $dishtype->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $dishtype, 'name' => 'dishtypes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($dishtypes) !!}
    </div>

@stop
