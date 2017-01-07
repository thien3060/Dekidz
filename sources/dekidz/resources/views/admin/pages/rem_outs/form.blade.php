@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.rem_outs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.rem_outs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('reason', trans('admin.rem_out.reason').':') !!}
            {!! Form::text('reason', null, ['class' => 'form-control']) !!}
            {!! $errors->first('reason', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', trans('admin.rem_out.date').':') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('paid', trans('admin.rem_out.paid').':') !!}
            {!! Form::text('paid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('paid', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('debt', trans('admin.rem_out.debt').':') !!}
            {!! Form::text('debt', null, ['class' => 'form-control']) !!}
            {!! $errors->first('debt', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('total', trans('admin.rem_out.total').':') !!}
            {!! Form::text('total', null, ['class' => 'form-control']) !!}
            {!! $errors->first('total', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}