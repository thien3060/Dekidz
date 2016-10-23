@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.lessons.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.lessons.store']) !!}
@endif

<div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lesson_name', 'Lesson Name:') !!}
            {!! Form::text('lesson_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lesson_name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('subject_topic_id', 'Subject topic:') !!}
            <select class="form-control subject-topic-id" name="subject_topic_id">
                <option value="0">Select group</option>
                @foreach($subject_topics as $key => $group)
                    <option value="{{$key}}" @if($key == @$model->subject_topic_id) selected="selected" @endif>{{$group}}</option>
                @endforeach
            </select>
            {!! $errors->first('subject_topic_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lesson_goal', 'Lesson Goal:') !!}
            {!! Form::text('lesson_goal', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lesson_goal', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('teach_activity', 'Teach activity:') !!}
            {!! Form::text('teach_activity', null, ['class' => 'form-control']) !!}
            {!! $errors->first('teach_activity', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('kid_activity', 'Kid activity:') !!}
            {!! Form::text('kid_activity', null, ['class' => 'form-control']) !!}
            {!! $errors->first('kid_activity', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('author', 'Author:') !!}
            {!! Form::text('author', null, ['class' => 'form-control']) !!}
            {!! $errors->first('author', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}