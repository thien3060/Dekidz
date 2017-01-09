@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.age_report.all')}}
    </h1>
@stop

@section('content')
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('class_id', trans('admin.study_result.class_id').':') !!}
            <select class="form-control gender" name="class_id" id="class">
                <option value="{{route('admin.age_report')}}">{{ trans('admin.study_result.select_class') }}</option>
                @if($classes != null)
                    @foreach(@$classes as $id => $name)
                        <option value="{{ route('admin.age_report').'?class_id='.$id }}" @if(@$class->id == $id)  selected="selected" @endif>{{ $name }}</option>
                    @endforeach
                @endif
            </select>
            {!! $errors->first('class_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    @if($class != null)
        <div class="col-sm-10">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('admin.age_report.list')}}</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>{{ trans('admin.age_report.no') }}</th>
                            <th>{{ trans('admin.age_report.name') }}</th>
                            <th>{{ trans('admin.age_report.dob') }}</th>
                            <th>{{ trans('admin.age_report.age') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                        @foreach($class->students as $student)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->dob}}</td>
                                <td class="ages">{!! \Carbon\Carbon::today()->diffInMonths(\Carbon\Carbon::createFromFormat('Y-m-d', $student->dob)) !!}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align: right">{{ trans('admin.age_report.average') }}</td>
                            <td id="average-age"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@stop

@section('script')
    <script>
        $('#class').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });

        @if($class != null)
        var average = 0;
        $('.ages').each(function () {
            average += parseInt($(this).html());
        });

        $('#average-age').html((average/{{$class->students()->count()}}).toFixed(1));
        @endif
    </script>
@endsection
