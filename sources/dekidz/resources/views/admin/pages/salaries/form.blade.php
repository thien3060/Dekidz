{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.salaries.update', $model->id]]) !!}
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('staff_name', 'Name:') !!}
            {!! Form::text('staff_name', $model->staff->name, ['class' => 'form-control', 'disabled']) !!}
            {!! Form::hidden('staff_id', $model->staff_id) !!}
            {!! $errors->first('staff_name', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('base_salary', 'Base Salary:') !!}
            {!! Form::text('base_salary', null, ['class' => 'form-control base-salary input-number', 'onkeyup'=>"updateSalary()"]) !!}
            {!! $errors->first('base_salary', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('wage_index', 'Wage Index:') !!}
            {!! Form::text('wage_index', null, ['class' => 'form-control wage-index input-number', 'onkeyup'=>"updateSalary()"]) !!}
            {!! $errors->first('wage_index', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('bonus', 'Bonus:') !!}
            {!! Form::text('bonus', null, ['class' => 'form-control bonus input-number', 'onkeyup'=>"updateSalary()"]) !!}
            {!! $errors->first('bonus', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('minus', 'Minus:') !!}
            {!! Form::text('minus', null, ['class' => 'form-control minus input-number', 'onkeyup'=>"updateSalary()"]) !!}
            {!! $errors->first('minus', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('salary', 'Salary:') !!}
            {!! Form::text('salary', null, ['class' => 'form-control salary input-number', 'disabled']) !!}
            {!! Form::hidden('salary', $model->salary, ['class' => 'salary']) !!}
            {!! $errors->first('salary', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}