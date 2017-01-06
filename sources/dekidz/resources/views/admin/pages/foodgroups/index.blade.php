@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.foodgroups.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{trans('admin.food_group.no')}}</th>
        <th>{{trans('admin.food_group.code')}}</th>
        <th>{{trans('admin.food_group.name')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($foodgroups as $foodgroup)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $foodgroup->code !!}</td>
                <td>{!! $foodgroup->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foodgroups.edit', $foodgroup->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $foodgroup, 'name' => 'foodgroups'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($foodgroups) !!}
    </div>

@stop
