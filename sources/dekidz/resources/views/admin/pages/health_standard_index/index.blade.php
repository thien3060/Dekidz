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
                    <option value="0">Student</option>
                    {{--@foreach($positions as $key => $position)--}}
                    {{--<option value="{{$key}}" @if($key == @$model->position) selected="selected" @endif>{{$position}}</option>--}}
                    {{--@endforeach--}}
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
        <th>Gender</th>
        <th>Age</th>
        <th>Height</th>
        <th>Weight</th>
        </thead>
        <tbody>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tbody>
    </table>

    <h4>Standard index</h4>
    <table class="table">
        <thead>
        <th>Gender</th>
        <th>Age</th>
        <th>Height</th>
        <th>Weight</th>
        </thead>
        <tbody>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tbody>
    </table>
@stop
