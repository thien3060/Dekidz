@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.foods.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.food.no')}}</th>
        <th>{{trans('admin.food.name')}}</th>
        <th>{{trans('admin.food.food_group_id')}}</th>
        <th>{{trans('admin.food.animal_source')}}</th>
        <th>{{trans('admin.food.quantity')}}</th>
        <th>{{trans('admin.food.unit')}}</th>
        <th>{{trans('admin.food.price')}}</th>

        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($foods as $food)
            <tr>
                <td>{!! $no !!}</td>
                <td><a href="{!! route('admin.foods.show', $food->id) !!}">{!! $food->name !!}</a></td>
                <td>{!! $foodgroups[$food->food_group_id] !!}</td>
                <td>{!! $food->animal_source !!}</td>
                <td>{!! $food->quantity !!}</td>
                <td>{!! $food->unit !!}</td>
                <td>{!! $food->price !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foods.edit', $food->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $food, 'name' => 'foods'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($foods) !!}
    </div>
@stop
