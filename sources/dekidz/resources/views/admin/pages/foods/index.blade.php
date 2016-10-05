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
        <th>In Kilogram</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Absorb</th>
        <th>Digest</th>
        <th>Calo</th>
        <th>H2O</th>
        <th>Protid</th>
        <th>Lipid</th>
        <th>Glucid</th>
        <th>Cellulose</th>
        <th>Cholesterol</th>
        <th>Calci</th>
        <th>Photpho</th>
        <th>Iron</th>
        <th>Vitamin Caroten</th>
        <th>Vatamin A</th>
        <th>Vitamin B1</th>
        <th>Vatamin B2</th>
        <th>Vatamin PP</th>
        <th>Vatamin C</th>

        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($foods as $food)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $food->name !!}</td>
                <td>{!! $food->food_group_id !!}</td>
                <td>{!! $food->animal_source !!}</td>
                <td>{!! $food->in_kg !!}</td>
                <td>{!! $food->unit !!}</td>
                <td>{!! $food->price !!}</td>
                <td>{!! $food->absorb !!}</td>
                <td>{!! $food->digest !!}</td>
                <td>{!! $food->calo !!}</td>
                <td>{!! $food->h2o !!}</td>
                <td>{!! $food->protid !!}</td>
                <td>{!! $food->lipid !!}</td>
                <td>{!! $food->glucid !!}</td>
                <td>{!! $food->cellulose !!}</td>
                <td>{!! $food->cholesterol !!}</td>
                <td>{!! $food->calci !!}</td>
                <td>{!! $food->photpho !!}</td>
                <td>{!! $food->iron !!}</td>
                <td>{!! $food->vitamin_caroten !!}</td>
                <td>{!! $food->vitamina !!}</td>
                <td>{!! $food->vitaminb1 !!}</td>
                <td>{!! $food->vitaminb2 !!}</td>
                <td>{!! $food->vitaminpp !!}</td>
                <td>{!! $food->vitaminc !!}</td>
                <td>{!! $food->vitaminc !!}</td>
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
