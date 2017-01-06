@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.students.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.students.store']) !!}
@endif
<div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', trans('admin.student.name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('email', trans('admin.student.email')) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('gender', trans('admin.student.gender')) !!}
                <select class="form-control gender" name="gender">
                    <option value="0">{{trans('admin.student.woman')}}</option>
                    <option value="1" @if (@$model->gender == 1) selected="selected" @endif>{{trans('admin.student.man')}}</option>
                </select>
                {!! $errors->first('gender', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('dob', trans('admin.student.dob')) !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('address', trans('admin.student.address')) !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('nation', trans('admin.student.nation')) !!}
                {!! Form::text('nation', null, ['class' => 'form-control']) !!}
                {!! $errors->first('nation', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('religion', trans('admin.student.religion')) !!}
                {!! Form::text('religion', null, ['class' => 'form-control']) !!}
                {!! $errors->first('religion', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('admission_date', trans('admin.student.admission_date')) !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('admission_date', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('admission_date', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('completion_date', trans('admin.student.completion_date')) !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('completion_date', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('completion_date', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('entry_card', trans('admin.student.entry_card')) !!}
                {!! Form::text('entry_card', null, ['class' => 'form-control']) !!}
                {!! $errors->first('entry_card', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_name', trans('admin.student.father_name')) !!}
                {!! Form::text('father_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                {!! Form::label('father_dob', trans('admin.student.father_dob')) !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('father_dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('father_dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_job', trans('admin.student.father_job')) !!}
                {!! Form::text('father_job', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_job', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_phone', trans('admin.student.father_phone')) !!}
                {!! Form::text('father_phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_phone', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_name', trans('admin.student.mother_name')) !!}
                {!! Form::text('mother_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                {!! Form::label('mother_dob', trans('admin.student.mother_dob')) !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('mother_dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('mother_dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_job', trans('admin.student.mother_job')) !!}
                {!! Form::text('mother_job', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_job', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_phone', trans('admin.student.mother_phone')) !!}
                {!! Form::text('mother_phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_phone', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('note', trans('admin.student.note')) !!}
            {!! Form::textarea('note', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('note', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('picture', trans('admin.student.picture')) !!}
            {!! Form::file('picture', ['class' => 'form-control']) !!}
            {!! $errors->first('picture', '<div class="text-danger">:message</div>') !!}
        </div>
        @if(isset($model))
            <div class="form-group">
                @if($model->picture)
                    <img class="img-responsive" src="{!! asset('images/students/' . $model->picture) !!}">
                @endif
            </div>
        @endif
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}