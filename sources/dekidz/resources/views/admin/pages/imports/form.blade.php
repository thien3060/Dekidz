@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.imports.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.imports.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('date', 'Import Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('cost', 'Cost:') !!}
            {!! Form::text('cost', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cost', '<div class="text-danger">:message</div>') !!}
        </div>

        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}