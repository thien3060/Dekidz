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
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Asset list</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">Add</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>No</th>
                    <th>Asset Name</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th class="text-center">Action</th>
                    </thead>
                    <tbody id="asset-list">
                    <tr>
                        <td>#</td>
                        <td>
                            <select class="form-control">
                                <option>Select asset</option>
                                @foreach($assets as $asset)
                                    <option>{{$asset}}</option>
                                @endforeach
                            </select>
                            {{--<input class="form-control asset-name" placeholder="Asset's name" name=asset-name[]" onkeyup="showHint(this)" type="text">--}}
                        </td>
                        <td>
                            <input class="form-control asset-supplier" placeholder="Asset's supplier" name="asset-supplier[]" type="text">
                        </td>
                        <td>
                            <input class="form-control asset-quantity" placeholder="Asset's quantity" name="asset-quantity[]" type="number">
                        </td>
                        <td>
                            <input class="form-control asset-cost" placeholder="Asset's cost" name="asset-cost[]" type="number">
                        </td>
                        <td style="text-align: center">
                            <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)">delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>

<ul class="asset-select" style="display: none">
    @foreach($assets as $asset)
        <li>{{$asset}}</li>
    @endforeach
</ul>

<div id="modal-delete-confirm" class="modal text-left fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Are you sure want to delete this asset?
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