@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.tuition_fee.all') }}
        &middot;
        <small>{!! link_to_route('admin.tuition_fees.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.tuition_fee.no') }}</th>
        <th>{{ trans('admin.tuition_fee.student_id') }}</th>
        <th>{{ trans('admin.tuition_fee.debt') }}</th>
        <th>{{ trans('admin.tuition_fee.paid') }}</th>
        <th>{{ trans('admin.tuition_fee.year') }}</th>
        <th>{{ trans('admin.tuition_fee.month') }}</th>

        <th class="text-center">{{  trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($tuition_fees as $tuition_fee)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $students[$tuition_fee->student_id] !!}</td>
                <td>{!! $tuition_fee->debt !!}</td>
                <td>{!! $tuition_fee->paid !!}</td>
                <td>{!! $tuition_fee->year !!}</td>
                <td>{!! $tuition_fee->month !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.tuition_fees.edit', $tuition_fee->id) !!}">{{  trans('admin.public.edit') }}</a>
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
