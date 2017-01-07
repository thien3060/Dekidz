@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.rem_in.all') }}
        &middot;
        <small>{!! link_to_route('admin.rem_ins.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.rem_in.no') }}</th>
        <th>{{ trans('admin.rem_in.reason') }}</th>
        <th>{{ trans('admin.rem_in.code') }}</th>
        <th>{{ trans('admin.rem_in.date') }}</th>
        <th>{{ trans('admin.rem_in.received') }}</th>
        <th>{{ trans('admin.rem_in.debt') }}</th>
        <th>{{ trans('admin.rem_in.total') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
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
                    <a href="{!! route('admin.rem_ins.edit', $rem_in->id) !!}">{{ trans('admin.public.edit') }}</a>
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
