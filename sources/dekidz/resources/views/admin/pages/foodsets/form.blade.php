@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.foodsets.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.foodsets.store']) !!}
@endif
<script>
    var assetsList = <?php echo json_encode($assets); ?>;
</script>
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
            {!! Form::label('type_id', 'Food Set type:') !!}
            <select class="form-control type-id" name="type_id">
                <option value="0">Select group</option>
                @foreach($foodsettypes as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->type_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
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


    <div class="col-sm-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Dish list</h3>
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
                    <th>Cost</th>
                    <th class="text-center">Action</th>
                    </thead>
                    <tbody id="asset-list">
                    <?php $k = -1;?>
                        @if(isset($model))
                            @foreach($model->dishes as $k => $dish)
                                <tr>
                                    <td class="asset-id">{{$k + 1}}</td>
                                    <td>
                                        <select onchange="selectAsset(this);" class="form-control asset-name" name="asset-name[]">
                                            <option value="0">Select Dish</option>
                                            @foreach($assets as $key => $asset)
                                                <option value="{{$key}}" @if($asset['id'] == $dish->id) selected="selected" @endif>{{$asset['name']}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Dish's quantity" name="asset-quantity[]" type="number"  value="{{$dish->pivot->quantity}}">
                                    </td>
                                    <td>
                                        <input class="form-control asset-price" name="asset-price[]" readonly onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Dish's price" type="number" value="{{$dish->pivot->price}}">
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
                            {{--<td class="asset-id">1</td>--}}
                            <td class="asset-id">{{$k + 2}}</td>
                            <td>
                                <select onchange="selectAsset(this);" class="form-control asset-name" name="asset-name[]">
                                    <option value="0" selected="selected">Select Dish</option>
                                    @foreach($assets as $key => $asset)
                                        <option value="{{$key}}">{{$asset['name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Dish's quantity" name="asset-quantity[]" type="number">
                            </td>
                            <td>
                                <input class="form-control asset-price" name="asset-price[]" readonly onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Dish's price" type="number">
                            </td>
                            <td>
                                <input readonly class="form-control asset-cost" placeholder="Asset's cost" value="0" name="asset-cost[]" type="number">
                            </td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-right"><strong>Total: </strong></td>
                            <td colspan="2" id="total-label" class="text-left">0</td>
                            <input type="hidden" id="total-cost" name="total_cost"/>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('calo', 'Calo:') !!}
            {!! Form::text('calo', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('calo', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('h2o', 'H2O:') !!}
            {!! Form::text('h2o', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('h2o', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid', 'Protid:') !!}
            {!! Form::text('protid', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid', 'Lipid:') !!}
            {!! Form::text('lipid', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('glucid', 'Glucid:') !!}
            {!! Form::text('glucid', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cellulose', 'Cellulose:') !!}
            {!! Form::text('cellulose', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('cellulose', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cholesterol', 'Cholesterol:') !!}
            {!! Form::text('cholesterol', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('cholesterol', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('calci', 'Calci:') !!}
            {!! Form::text('calci', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('calci', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('photpho', 'Photpho:') !!}
            {!! Form::text('photpho', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('photpho', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('iron', 'Iron:') !!}
            {!! Form::text('iron', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('iron', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitamin_caroten', 'Vitamin Caroten:') !!}
            {!! Form::text('vitamin_caroten', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitamin_caroten', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitamina', 'Vitamin A:') !!}
            {!! Form::text('vitamina', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitamina', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminb1', 'Vitamin B1:') !!}
            {!! Form::text('vitaminb1', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitaminb1', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminb2', 'Vitamin B2:') !!}
            {!! Form::text('vitaminb2', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitaminb2', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminpp', 'Vitamin PP:') !!}
            {!! Form::text('vitaminpp', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitaminpp', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminc', 'Vitamin C:') !!}
            {!! Form::text('vitaminc', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
            {!! $errors->first('vitaminc', '<div class="text-danger">:message</div>') !!}
        </div>
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