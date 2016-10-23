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
        <th>Daily Cal</th>
        <th>School Time Cal</th>
        <th>Daily Protid</th>
        <th>School Time Protid</th>
        <th>Daily Lipid</th>
        <th>School Time Lipid</th>
        <th>Daily Glucid</th>
        <th>School Time Glucid</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($energy_needs as $energy_need)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $energy_need->age !!}</td>
                <td>{!! $energy_need->daily_cal !!}</td>
                <td>{!! $energy_need->school_time_cal !!}</td>
                <td>{!! $energy_need->daily_protid !!}</td>
                <td>{!! $energy_need->school_time_protid !!}</td>
                <td>{!! $energy_need->daily_lipid !!}</td>
                <td>{!! $energy_need->school_time_lipid !!}</td>
                <td>{!! $energy_need->daily_glucid !!}</td>
                <td>{!! $energy_need->school_time_glucid !!}</td>
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
