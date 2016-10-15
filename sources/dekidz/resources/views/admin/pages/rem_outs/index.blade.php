@extends($layout)

@section('content-header')
    <h1>
        All Rem In
        &middot;
        <small>{!! link_to_route('admin.rem_outs.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Reason</th>
        <th>Code</th>
        <th>Date</th>
        <th>Paid</th>
        <th>Debt</th>
        <th>Total</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($rem_outs as $rem_out)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $rem_out->out_reason !!}</td>
                <td>{!! $rem_out->out_code !!}</td>
                <td>{!! $rem_out->out_date !!}</td>
                <td>{!! $rem_out->out_paid !!}</td>
                <td>{!! $rem_out->out_debt !!}</td>
                <td>{!! $rem_out->out_total !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.rem_outs.edit', $rem_out->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $rem_out, 'name' => 'rem_outs'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($rem_outs) !!}
    </div>
@stop
