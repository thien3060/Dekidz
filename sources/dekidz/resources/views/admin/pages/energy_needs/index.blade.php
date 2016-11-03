@extends($layout)

@section('content-header')
    <h1>
        All Energy Needs
        &middot;
        <small>{!! link_to_route('admin.energy_needs.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>No</th>
        <th>Age</th>
        <th>Calo</th>
        <th>Nước</th>
        <th>Protid</th>
        <th>Lipid</th>
        <th>Glucid</th>
        <th>Cellulose</th>
        <th>Cholesterol</th>
        <th>Canxi</th>
        <th>Photpho</th>
        <th>Iron</th>
        <th>Vitamin Caroten</th>
        <th>Vitamin A</th>
        <th>Vitamin B1</th>
        <th>Vitamin B2</th>
        <th>Vitamin PP</th>
        <th>Vitamin C</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($energy_needs as $energy_need)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $energy_need->age !!}</td>
                <td>{!! $energy_need->calo !!}</td>
                <td>{!! $energy_need->h2o !!}</td>
                <td>{!! $energy_need->protid !!}</td>
                <td>{!! $energy_need->lipid !!}</td>
                <td>{!! $energy_need->glucid !!}</td>
                <td>{!! $energy_need->cellulose !!}</td>
                <td>{!! $energy_need->cholesterol !!}</td>
                <td>{!! $energy_need->calci !!}</td>
                <td>{!! $energy_need->photpho !!}</td>
                <td>{!! $energy_need->iron !!}</td>
                <td>{!! $energy_need->vitamin_caroten !!}</td>
                <td>{!! $energy_need->vitamina !!}</td>
                <td>{!! $energy_need->vitaminb1 !!}</td>
                <td>{!! $energy_need->vitaminb2 !!}</td>
                <td>{!! $energy_need->vitaminpp !!}</td>
                <td>{!! $energy_need->vitaminc !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.energy_needs.edit', $energy_need->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $energy_need, 'name' => 'energy_needs'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($energy_needs) !!}
    </div>

@stop
