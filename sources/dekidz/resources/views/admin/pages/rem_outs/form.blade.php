@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.rem_outs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.rem_outs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('out_reason', 'Reason:') !!}
            {!! Form::text('out_reason', null, ['class' => 'form-control']) !!}
            {!! $errors->first('out_reason', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('out_code', 'Code:') !!}
            {!! Form::text('out_code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('out_code', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('out_date', 'Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('out_date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('out_date', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('out_paid', 'Paid:') !!}
            {!! Form::text('out_paid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('out_paid', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('out_debt', 'Debt:') !!}
            {!! Form::text('out_debt', null, ['class' => 'form-control']) !!}
            {!! $errors->first('out_debt', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('out_total', 'Total:') !!}
            {!! Form::text('out_total', null, ['class' => 'form-control']) !!}
            {!! $errors->first('out_total', '<div class="text-danger">:message</div>') !!}
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