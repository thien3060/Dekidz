@extends($layout)

@section('content-header')
    <h1>
        All Study Result
    </h1>
@stop

@section('content')
    {!! Form::open(['route' => 'admin.study_results.update', 'id' => 'study-result-form']) !!}
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('class_id', trans('admin.study_result.class_id').':') !!}
                <select class="form-control gender" name="class_id" id="class">
                    <option value="0">{{ trans('admin.study_result.select_class') }}</option>
                    @foreach($classes as $id => $name)
                        <option value="{{ $id }}" @if(@$model['class_id'] == $id)  selected="selected" @endif>{{ $name }}</option>
                    @endforeach
                </select>
                {!! $errors->first('class_id', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('semester', trans('admin.study_result.semester').':') !!}
                <select class="form-control gender" name="semester" id="semester">
                    <option value="1" @if(@$model['semester'] == 1)  selected="selected" @endif>1</option>
                    <option value="2" @if(@$model['semester'] == 2)  selected="selected" @endif>2</option>
                </select>
                {!! $errors->first('semester', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('lesson_id', trans('admin.study_result.lesson_id').':') !!}
                <select class="form-control gender" name="lesson_id" id="lesson">
                    <option value="0">{{ trans('admin.study_result.select_lesson') }}</option>
                </select>
                {!! $errors->first('lesson_id', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('admin.study_result.list') }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" id="student-list">
                    @include('admin.pages.study_results.list')
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit(trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop

@section('script')
    @include('admin.pages.study_results.js')
@endsection