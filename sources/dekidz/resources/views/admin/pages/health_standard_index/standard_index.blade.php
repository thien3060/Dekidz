@extends($layout)

@section('content-header')
    <h1>
        Health indexs
    </h1>
@stop

@section('content')
    <section class="col-lg-6 connectedSortable" id="weight-chart-wrapper">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i>{{ trans('admin.health_stadard_index.standard_index') }}</li>
            </ul>
            <div class="tab-content no-padding">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{ trans('admin.health_stadard_index.month') }}</th>
                        <th>{{ trans('admin.health_stadard_index.height') }}</th>
                        <th>{{ trans('admin.health_stadard_index.weight') }}</th>
                        <th>{{ trans('admin.health_stadard_index.gender') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($health_index as $index)
                        <tr>
                            <td>{{ $index->month }}</td>
                            <td>{{ $index->height }}</td>
                            <td>{{ $index->weight }}</td>
                            <td>
                                @if($index->gender == 1)
                                    Nam
                                @else
                                    Nữ
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop

@section('script')

@stop