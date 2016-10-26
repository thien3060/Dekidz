@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.export_assets.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.export_assets.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('date', 'Export Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>
        <input type="hidden" id="is_food" value="0" name="is_food"/>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Asset list</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">Add</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th class="text-center">Action</th>
                    </thead>
                    <tbody id="asset-list">
                    @if(isset($model))
                        @foreach($model->foods as $food)
                            <tr>
                                <td class="asset-id">0</td>
                                <td>
                                    <select class="form-control asset-name" name="asset-name[]">
                                        <option value="0">Select asset</option>
                                        @foreach($assets as $key => $asset)
                                            <option value="{{$key}}" @if($key == $food->id) selected="selected" @endif>{{$asset}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number"  value="{{$food->pivot->quantity}}">
                                </td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                        <td class="asset-id">0</td>
                        <td>
                            <select class="form-control asset-name" name="asset-name[]">
                                <option value="0" selected="selected">Select asset</option>
                                @foreach($assets as $key => $asset)
                                    <option value="{{$key}}">{{$asset}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number">
                        </td>
                        <td style="text-align: center">
                            <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

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