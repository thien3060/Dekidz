@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.rem_ins.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.rem_ins.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('in_reason', 'Reason:') !!}
            {!! Form::text('in_reason', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_reason', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_code', 'Code:') !!}
            {!! Form::text('in_code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_code', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_date', 'Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('in_date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('in_date', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_received', 'Received:') !!}
            {!! Form::text('in_received', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_received', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_dept', 'Dept:') !!}
            {!! Form::text('in_dept', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_dept', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_total', 'Total:') !!}
            {!! Form::text('in_total', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_total', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_status', 'Status:') !!}
            {!! Form::text('in_status', null, ['class' => 'form-control']) !!}
            {!! $errors->first('in_status', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('in_note', 'Note:') !!}
            {!! Form::textarea('in_note', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('in_note', '<div class="text-danger">:message</div>') !!}
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