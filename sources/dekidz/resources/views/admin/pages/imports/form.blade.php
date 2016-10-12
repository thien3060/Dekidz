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
                    <th>Asset Name</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Cost</th>
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
                                        <input class="form-control asset-supplier" placeholder="Asset's supplier" name="asset-supplier[]" type="text"  value="{{$food->pivot->supplier}}">
                                    </td>
                                    <td>
                                        <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number"  value="{{$food->pivot->quantity}}">
                                    </td>
                                    <td>
                                        <input class="form-control asset-price" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's price" type="number" value="{{$food->pivot->cost}}">
                                    </td>
                                    <td>
                                        <input readonly class="form-control asset-cost" placeholder="Asset's cost" value="0" name="asset-cost[]" type="number">
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
                                <input class="form-control asset-supplier" placeholder="Asset's supplier" name="asset-supplier[]" type="text">
                            </td>
                            <td>
                                <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number">
                            </td>
                            <td>
                                <input class="form-control asset-price" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's price" type="number">
                            </td>
                            <td>
                                <input readonly class="form-control asset-cost" placeholder="Asset's cost" value="0" name="asset-cost[]" type="number">
                            </td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-right"><strong>Total: </strong></td>
                                <td colspan="2" id="total-label" class="text-left">0</td>
                                <input type="hidden" id="total-cost" name="cost"/>
                            </tr>
                        </tbody>
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