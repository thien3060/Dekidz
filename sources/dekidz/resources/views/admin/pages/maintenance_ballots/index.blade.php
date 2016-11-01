@extends($layout)

@section('content-header')
    <h1>
        All
        &middot;
        <small>{!! link_to_route('admin.maintenance_ballots.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Maintenance Date</th>
        <th>Created By</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($maintenance_ballots as $maintenance_ballot)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $maintenance_ballot->date !!}</td>
                <td>{!! $maintenance_ballot->created_by !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.maintenance_ballots.edit', $maintenance_ballot->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $maintenance_ballot, 'name' => 'maintenance_ballots'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($maintenance_ballots) !!}
    </div>
@stop
