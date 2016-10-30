@extends($layout)

@section('content-header')
    <h1>
        All Foods
        &middot;
        <small>{!! link_to_route('admin.foods.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Food Group</th>
        <th>Animal Source</th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Price</th>

        <th class="text-center">Action</th>
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
                    <a href="{!! route('admin.foods.edit', $food->id) !!}">Edit</a>
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
