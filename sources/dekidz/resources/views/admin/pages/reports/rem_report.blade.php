@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.rem_report.all')}}
    </h1>
@stop

@section('content')
    <div class="col-sm-10">
        <h4>{{trans('admin.rem_report.message', ['from' => $from->format('d/m/Y'), 'to' => $to->format('d/m/Y')])}}</h4>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.rem_report.rem_in')}}</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>{{ trans('admin.rem_report.no') }}</th>
                        <th>{{ trans('admin.rem_report.code') }}</th>
                        <th>{{ trans('admin.rem_report.date') }}</th>
                        <th>{{ trans('admin.rem_report.reason') }}</th>
                        <th>{{ trans('admin.rem_report.amount') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    @foreach($rem_ins as $rem_in)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$rem_in->code}}</td>
                            <td>{{$rem_in->date}}</td>
                            <td>{{$rem_in->reason}}</td>
                            <td>{{$rem_in->total}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" style="text-align: right">{{ trans('admin.rem_report.total') }}</td>
                        <td>{{$total_in}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.rem_report.rem_out')}}</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>{{ trans('admin.rem_report.no') }}</th>
                        <th>{{ trans('admin.rem_report.code') }}</th>
                        <th>{{ trans('admin.rem_report.date') }}</th>
                        <th>{{ trans('admin.rem_report.reason') }}</th>
                        <th>{{ trans('admin.rem_report.amount') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    @foreach($rem_outs as $rem_out)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$rem_out->code}}</td>
                            <td>{{$rem_out->date}}</td>
                            <td>{{$rem_out->reason}}</td>
                            <td>{{$rem_out->total}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" style="text-align: right">{{ trans('admin.rem_report.total') }}</td>
                        <td>{{$total_out}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
