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

        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('position', 'Position:') !!}
                <select class="form-control" name="position">
                    <option value="0">Date</option>
                    {{--@foreach($positions as $key => $position)--}}
                    {{--<option value="{{$key}}" @if($key == @$model->position) selected="selected" @endif>{{$position}}</option>--}}
                    {{--@endforeach--}}
                </select>
            </div>
        </div>
    </div>

    <h4>Student's physical info</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Gender</th>
                <th>Age</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <h4>Standard index</h4>
    <table class="table">
        <thead>
        <tr>
            <th>Gender</th>
            <th>Age</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <section class="col-lg-7 connectedSortable">


        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Height chart</li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>

        <!-- /.box (chat box) -->
    </section>
    <section class="col-lg-7 connectedSortable">


        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Weight chart</li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>

        <!-- /.box (chat box) -->
    </section>
@stop

@section('script')
    <script src="{!! admin_asset('components/raphael/raphael-min.js') !!}"></script>
    <script src="{!! admin_asset('adminlte/js/plugins/morris/morris.min.js') !!}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{!! admin_asset('adminlte/js/AdminLTE/dashboard.js') !!}" type="text/javascript"></script>
@stop