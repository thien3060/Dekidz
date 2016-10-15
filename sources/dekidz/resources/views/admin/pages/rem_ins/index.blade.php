@extends($layout)

@section('content-header')
    <h1>
        All Rem In
        &middot;
        <small>{!! link_to_route('admin.rem_ins.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Reason</th>
        <th>Code</th>
        <th>Date</th>
        <th>Received</th>
        <th>Dept</th>
        <th>Total</th>
        <th>Status</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($rem_ins as $rem_in)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $rem_in->in_reason !!}</td>
                <td>{!! $rem_in->in_code !!}</td>
                <td>{!! $rem_in->in_date !!}</td>
                <td>{!! $rem_in->in_received !!}</td>
                <td>{!! $rem_in->in_dept !!}</td>
                <td>{!! $rem_in->in_total !!}</td>
                <td>{!! $rem_in->in_status !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.rem_ins.edit', $rem_in->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $rem_in, 'name' => 'rem_ins'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($rem_ins) !!}
    </div>
@stop
