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
        <th>Debt</th>
        <th>Total</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($rem_ins as $rem_in)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $rem_in->reason !!}</td>
                <td>{!! $rem_in->code !!}</td>
                <td>{!! $rem_in->date !!}</td>
                <td>{!! $rem_in->received !!}</td>
                <td>{!! $rem_in->debt !!}</td>
                <td>{!! $rem_in->total !!}</td>
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
