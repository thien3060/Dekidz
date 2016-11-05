@extends($layout)

@section('content-header')
    <h1>
        All Study Result
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('class_id', 'Class:') !!}
                <select class="form-control gender" name="class_id" id="class">
                    <option value="0" selected="selected">Select class</option>
                    @foreach($classes as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                {!! $errors->first('class_id', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('semester', 'Semester:') !!}
                <select class="form-control gender" name="semester" id="semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                {!! $errors->first('semester', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('lesson_id', 'Lesson:') !!}
                <select class="form-control gender" name="lesson_id" id="lesson">
                    <option value="0">Select Lesson</option>
                </select>
                {!! $errors->first('lesson_id', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Student list</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" id="student-list">
                    @include('admin.pages.study_results.list')
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
@stop

@section('script')
    @include('admin.pages.study_results.js')
@endsection