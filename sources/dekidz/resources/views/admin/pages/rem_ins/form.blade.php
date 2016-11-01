@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.rem_ins.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.rem_ins.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('reason', 'Reason:') !!}
            {!! Form::text('reason', null, ['class' => 'form-control']) !!}
            {!! $errors->first('reason', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('received', 'Received:') !!}
            {!! Form::text('received', null, ['class' => 'form-control']) !!}
            {!! $errors->first('received', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('debt', 'Dept:') !!}
            {!! Form::text('debt', null, ['class' => 'form-control']) !!}
            {!! $errors->first('debt', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('total', 'Total:') !!}
            {!! Form::text('total', null, ['class' => 'form-control']) !!}
            {!! $errors->first('total', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('note', 'Note:') !!}
            {!! Form::textarea('note', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('note', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}