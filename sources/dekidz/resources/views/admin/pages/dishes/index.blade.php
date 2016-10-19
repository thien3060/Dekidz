@extends($layout)

@section('content-header')
    <h1>
        All Dishes
        &middot;
        <small>{!! link_to_route('admin.dishes.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Prepare Description</th>
        <th>Cooking Description</th>
        <th>Chef</th>
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

        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($dishes as $dish)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $dish->name !!}</td>
                <td>{!! $dish->type_id !!}</td>
                <td>{!! $dish->preparing_description !!}</td>
                <td>{!! $dish->cooking_description !!}</td>
                <td>{!! $dish->chef !!}</td>
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
                    <a href="{!! route('admin.dishes.edit', $dish->id) !!}">Edit</a>
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
