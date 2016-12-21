@extends($layout)

@section('content-header')
    <h1>
        Health index
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('position', 'Position:') !!}
                <select class="form-control" name="position">
                    <option value="0">Select student</option>
                    @foreach($students as $key => $student)
                    <option value="{{$key}}">{{$student->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <section class="col-lg-12 connectedSortable">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Height chart</li>
            </ul>
            <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="height-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
    </section>
    <section class="col-lg-12 connectedSortable">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Weight chart</li>
            </ul>
            <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="weight-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
    </section>

    <h4>Student's physical info</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Gender</th>
                <th>Month</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
        @foreach($current_student->physical_info as $info)
            <tr>
                <td>{{ $info->gender }}</td>
                <td>{{ $info->age }}</td>
                <td>{{ $info->height }}</td>
                <td>{{ $info->weight }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h4>Standard index</h4>
    <table class="table">
        <thead>
        <tr>
            <th>Gender</th>
            <th>Month</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
        </thead>
        <tbody>
        @foreach($health_index as $index)
        <tr>
            <td>{{ $index->gender }}</td>
            <td>{{ $index->month }}</td>
            <td>{{ $index->height }}</td>
            <td>{{ $index->weight }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('script')
    <script src="{!! admin_asset('components/raphael/raphael-min.js') !!}"></script>
    <script src="{!! admin_asset('adminlte/js/plugins/morris/morris.min.js') !!}"></script>
    @include('admin.pages.health_standard_index.health_index_js')
@stop