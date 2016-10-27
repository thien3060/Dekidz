@extends($layout)

@section('content-header')
    <h1>
        All Tuition Fees
        &middot;
        <small>{!! link_to_route('admin.tuition_fees.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Student</th>
        <th>Dept</th>
        <th>Paid</th>
        <th>Year</th>
        <th>Month</th>

        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($tuition_fees as $tuition_fee)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $tuition_fee->student_id !!}</td>
                <td>{!! $tuition_fee->debt !!}</td>
                <td>{!! $tuition_fee->paid !!}</td>
                <td>{!! $tuition_fee->year !!}</td>
                <td>{!! $tuition_fee->month !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.tuition_fees.edit', $tuition_fee->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $tuition_fee, 'name' => 'tuition_fees'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($tuition_fees) !!}
    </div>
@stop
