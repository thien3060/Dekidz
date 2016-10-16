@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.foodsets.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.foodsets.store']) !!}
@endif
<div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('type_id', 'Type:') !!}
            {!! Form::text('type_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('type_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('age', 'Age:') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}
            {!! $errors->first('age', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('quantity', 'Quantity:') !!}
            {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
            {!! $errors->first('quantity', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>






    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Food list</h3>
            <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">Add</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body text-center">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Dish Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th class="text-center">Action</th>
                </thead>
                <tbody id="asset-list">
                @if(isset($model))
                    @foreach($model->dishes as $dish)
                        <tr>
                            <td class="asset-id">0</td>
                            <td>
                                <select class="form-control asset-name" name="asset-name[]">
                                    <option value="0">Select dish</option>
                                    @foreach($assets as $key => $asset)
                                        <option value="{{$key}}" @if($key == $dish->id) selected="selected" @endif>{{$asset}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number"  value="{{$dish->pivot->quantity}}">
                            </td>
                            <td>
                                <input class="form-control asset-price" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's price" type="number" value="{{$dish->pivot->price}}">
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






    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cal', 'Cal:') !!}
            {!! Form::text('cal', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cal', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cal_needed', 'Cal needed:') !!}
            {!! Form::text('cal_needed', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cal_needed', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid', 'Protid:') !!}
            {!! Form::text('protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid_needed', 'Protid needed:') !!}
            {!! Form::text('protid_needed', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid_needed', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid', 'Lipid:') !!}
            {!! Form::text('lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid_needed', 'Lipid needed:') !!}
            {!! Form::text('lipid_needed', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid_needed', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('glucid', 'Lipid:') !!}
            {!! Form::text('lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('glucid_needed', 'Glucid:') !!}
            {!! Form::text('glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('plg_proportion', 'Plg proportion:') !!}
            {!! Form::text('plg_proportion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('plg_proportion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('plg_proportion_needed', 'PLG proportion needed:') !!}
            {!! Form::text('plg_proportion_needed', null, ['class' => 'form-control']) !!}
            {!! $errors->first('plg_proportion_needed', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cal_proportion', 'Cal proportion:') !!}
            {!! Form::text('cal_proportion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cal_proportion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid_proportion', 'Protid proportion:') !!}
            {!! Form::text('protid_proportion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid_proportion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid_proportion', 'Lipid proportion:') !!}
            {!! Form::text('lipid_proportion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid_proportion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('glucid_proportion', 'Glucid proportion:') !!}
            {!! Form::text('glucid_proportion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('glucid_proportion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid_dv', 'Protid DV:') !!}
            {!! Form::text('protid_dv', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid_dv', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid_tv', 'Protid TV:') !!}
            {!! Form::text('protid_tv', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid_tv', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid_dv', 'Lipid DV:') !!}
            {!! Form::text('lipid_dv', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid_dv', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid_tv', 'Lipid TV:') !!}
            {!! Form::text('lipid_tv', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid_tv', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('total_cost', 'Total cost:') !!}
            {!! Form::text('total_cost', null, ['class' => 'form-control']) !!}
            {!! $errors->first('total_cost', '<div class="text-danger">:message</div>') !!}
        </div>
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