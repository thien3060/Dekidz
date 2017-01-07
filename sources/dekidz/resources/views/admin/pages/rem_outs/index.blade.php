@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.rem_out.all') }}
        &middot;
        <small>{!! link_to_route('admin.rem_outs.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.rem_out.no') }}</th>
        <th>{{ trans('admin.rem_out.reason') }}</th>
        <th>{{ trans('admin.rem_out.code') }}</th>
        <th>{{ trans('admin.rem_out.date') }}</th>
        <th>{{ trans('admin.rem_out.paid') }}</th>
        <th>{{ trans('admin.rem_out.debt') }}</th>
        <th>{{ trans('admin.rem_out.total') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($rem_outs as $rem_out)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $rem_out->reason !!}</td>
                <td>{!! $rem_out->code !!}</td>
                <td>{!! $rem_out->date !!}</td>
                <td>{!! $rem_out->paid !!}</td>
                <td>{!! $rem_out->debt !!}</td>
                <td>{!! $rem_out->total !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.rem_outs.edit', $rem_out->id) !!}">{{ trans('admin.public.edit') }}</a>
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
