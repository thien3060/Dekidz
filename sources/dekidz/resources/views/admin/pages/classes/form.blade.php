@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.classes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.classes.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('school_year', 'School year:') !!}
            {!! Form::text('school_year', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_year', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('room_number', 'Room number:') !!}
            {!! Form::text('room_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('room_number', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('teacher_id', 'Teacher:') !!}
            <select class="form-control teacher-id" name="teacher_id">
                <option value="0">Select teacher</option>
                @foreach($staffs as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->teacher_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
            {!! $errors->first('teacher_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>


    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('grade_id', 'Grade:') !!}
            <select class="form-control grade-id" name="grade_id">
                <option value="0">Select grade</option>
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
        <h3 class="box-title">Student list</h3>
        <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">Add</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body text-center">
        <table class="table">
            <thead>
            <th>#</th>
            <th>Name</th>
            {{--<th>Quantity</th>--}}
            <th class="text-center">Action</th>
            </thead>
            <tbody id="asset-list">
            <?php $no = 1?>
            @if(isset($model))
                @foreach($model->students as $student)
                    <tr>
                        <td class="asset-id">{{ $no++ }}</td>
                        <td>
                            <select class="form-control asset-name" name="asset-name[]">
                                <option value="0">Select student</option>
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
                        <option value="0" selected="selected">Select student</option>
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
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>

<div id="modal-delete-confirm" class="modal text-left fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Are you sure want to delete this student?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="deleteCurrentItem()">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}