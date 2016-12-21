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
                {!! Form::label('student', 'Student:') !!}
                <select class="form-control" name="position" id="current-student">
                    <option value="0">Select student</option>
                    @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <section class="col-lg-12 connectedSortable" id="height-chart-wrapper">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Height chart</li>
            </ul>
            <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="height-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
    </section>
    <section class="col-lg-12 connectedSortable" id="weight-chart-wrapper">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Weight chart</li>
            </ul>
            <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="weight-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
    </section>
    <div id="info-table">
    </div>
@stop

@section('script')
    <script src="{!! admin_asset('components/raphael/raphael-min.js') !!}"></script>
    <script src="{!! admin_asset('adminlte/js/plugins/morris/morris.min.js') !!}"></script>
    @include('admin.pages.health_standard_index.health_index_js')
@stop