@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.dishes.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.dish.no')}}</th>
        <th>{{trans('admin.dish.name')}}</th>
        <th>{{trans('admin.dish.type_id')}}</th>
        <th>{{trans('admin.dish.chef')}}</th>
        <th>{{trans('admin.dish.total_cost')}}</th>
        <th>{{trans('admin.dish.preparing_description')}}</th>
        <th>{{trans('admin.dish.cooking_description')}}</th>

        {{--<th>Protid DV</th>--}}
        {{--<th>Protid TV</th>--}}
        {{--<th>Lipip DV</th>--}}
        {{--<th>Lipid TV</th>--}}
        {{--<th>Glucid</th>--}}
        {{--<th>Calo</th>--}}
        {{--<th>Canxi</th>--}}
        {{--<th>Iron</th>--}}
        {{--<th>Vatamin A</th>--}}
        {{--<th>Vitamin B1</th>--}}
        {{--<th>Vatamin B2</th>--}}
        {{--<th>Vatamin PP</th>--}}
        {{--<th>Vatamin C</th>--}}

        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($dishes as $dish)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $dish->name !!}</td>
                <td>{!! $dishtypes[$dish->type_id] !!}</td>
                <td>{!! $dish->chef !!}</td>
                <td>{!! $dish->total_cost !!}</td>
                <td>{!! $dish->preparing_description !!}</td>
                <td>{!! $dish->cooking_description !!}</td>

                {{--<td>{!! $dish->protid_dv !!}</td>--}}
                {{--<td>{!! $dish->protid_tv !!}</td>--}}
                {{--<td>{!! $dish->lipid_dv !!}</td>--}}
                {{--<td>{!! $dish->lipid_tv !!}</td>--}}
                {{--<td>{!! $dish->glucid !!}</td>--}}
                {{--<td>{!! $dish->calo !!}</td>--}}
                {{--<td>{!! $dish->canxi !!}</td>--}}
                {{--<td>{!! $dish->photpho !!}</td>--}}
                {{--<td>{!! $dish->iron !!}</td>--}}
                {{--<td>{!! $dish->vitamina !!}</td>--}}
                {{--<td>{!! $dish->vitaminb1 !!}</td>--}}
                {{--<td>{!! $dish->vitaminb2 !!}</td>--}}
                {{--<td>{!! $dish->vitaminpp !!}</td>--}}
                {{--<td>{!! $dish->vitaminc !!}</td>--}}
                <td class="text-center">
                    <a href="{!! route('admin.dishes.edit', $dish->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $dish, 'name' => 'dishes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($dishes) !!}
    </div>
@stop
