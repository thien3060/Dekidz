@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.classes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.classes.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('name', trans('admin.class.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('school_year', trans('admin.class.school_year')) !!}
            {!! Form::text('school_year', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_year', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('room_number', trans('admin.class.room_number')) !!}
            {!! Form::text('room_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('room_number', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('teacher_id', trans('admin.class.teacher_id')) !!}
            <select class="form-control teacher-id" name="teacher_id">
                <option value="0">{{trans('admin.public.select')}}</option>
                @foreach($staffs as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->teacher_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
            {!! $errors->first('teacher_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>


    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('grade_id', trans('admin.class.grade_id')) !!}
            <select class="form-control grade-id" name="grade_id">
                <option value="0">{{trans('admin.public.select')}}</option>
                @foreach($grades as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->grade_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
            {!! $errors->first('grade_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>

<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('admin.class.student_list')}}</h3>
        <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">{{trans('admin.public.add')}}</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body text-center">
        <table class="table">
            <thead>
            <th>#</th>
            <th>{{trans('admin.class.name')}}</th>
            {{--<th>Quantity</th>--}}
            <th class="text-center">{{trans('admin.public.action')}}</th>
            </thead>
            <tbody id="asset-list">
            <?php $no = 1?>
            @if(isset($model))
                @foreach($model->students as $student)
                    <tr>
                        <td class="asset-id">{{ $no++ }}</td>
                        <td>
                            <select class="form-control asset-name" name="asset-name[]">
                                <option value="0">{{trans('admin.public.select')}}</option>
                                @foreach($students as $key => $asset)
                                    <option value="{{$key}}" @if($key == $student->id) selected="selected" @endif>{{$asset}}</option>
                                @endforeach
                            </select>
                        </td>

                        <td style="text-align: center">
                            <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif
            <tr>
                <td class="asset-id">{{ $no }}</td>
                <td>
                    <select class="form-control asset-name" name="asset-name[]">
                        <option value="0" selected="selected">{{trans('admin.public.select')}}</option>
                        @foreach($students as $key => $asset)
                            <option value="{{$key}}">{{$asset}}</option>
                        @endforeach
                    </select>
                </td>

                <td style="text-align: center">
                    <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>

<div id="modal-delete-confirm" class="modal text-left fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    {{trans('admin.public.confirm_delete')}}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="deleteCurrentItem()">{{trans('admin.public.yes')}}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.public.no')}}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}