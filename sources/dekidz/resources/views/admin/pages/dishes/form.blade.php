@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.dishes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.dishes.store']) !!}
@endif
<script>
    var foodList = <?php echo json_encode($foods); ?>;
</script>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('name', trans('admin.dish.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('type_id', trans('admin.dish.type_id')) !!}
            <select class="form-control type-id" name="type_id">
                <option value="0">{{trans('admin.public.select')}}</option>
                @foreach($dishtypes as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->type_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
            {!! $errors->first('type_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('chef', trans('admin.dish.chef')) !!}
            {!! Form::text('chef', null, ['class' => 'form-control']) !!}
            {!! $errors->first('chef', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.dish.list_food')}}</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">{{trans('admin.public.add')}}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>{{trans('admin.dish.food_name')}}</th>
                    <th>{{trans('admin.dish.quantity')}}</th>
                    <th>{{trans('admin.dish.price')}}</th>
                    <th>{{trans('admin.dish.cost')}}</th>
                    <th class="text-center">{{trans('admin.public.action')}}</th>
                    </thead>
                    <tbody id="asset-list">
                    <?php $k = -1;?>
                    @if(isset($model))
                        @foreach($model->foods as $k => $food)
                            <tr>
                                <td class="asset-id">{{$k + 1}}</td>
                                <td>
                                    <select onchange="selectFood(this);" class="form-control asset-name" name="asset-name[]">
                                        <option value="0">Select food</option>
                                        @foreach($foods as $key => $f)
                                            <option value="{{$key}}" @if($f['id'] == $food->id) selected="selected" @endif>{{$f['name']}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Food's quantity" name="asset-quantity[]" type="number"  value="{{$food->pivot->quantity}}">
                                </td>
                                <td>
                                    <input class="form-control asset-price" name="asset-price[]" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Food's price" type="number" value="{{$food->pivot->price}}">
                                </td>
                                <td>
                                    <input readonly class="form-control asset-cost" placeholder="Food's cost" value="0" name="asset-cost[]" type="number">
                                </td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                        <td class="asset-id">{{$k + 2}}</td>
                        <td>
                            <select onchange="selectFood(this);" class="form-control asset-name" name="asset-name[]">
                                <option value="0" selected="selected">{{trans('admin.public.select')}}</option>
                                @foreach($foods as $key => $food)
                                    <option value="{{$key}}">{{$food['name']}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Food's quantity" name="asset-quantity[]" type="number">
                        </td>
                        <td>
                            <input class="form-control asset-price" name="asset-price[]" readonly onchange="updateCost(this);" placeholder="Food's price" type="number">
                        </td>
                        <td>
                            <input readonly class="form-control asset-cost" placeholder="Food's cost" value="0" name="asset-cost[]" type="number">
                        </td>
                        <td style="text-align: center">
                            <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td colspan="4" class="text-right"><strong>{{trans('admin.dish.total_cost')}} </strong></td>
                        <td colspan="2" id="total-label" class="text-left">0</td>
                        <input type="hidden" id="total-cost" name="total_cost"/>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('preparing_description', trans('admin.dish.preparing_description')) !!}
            {!! Form::textarea('preparing_description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            {!! $errors->first('preparing_description', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('cooking_description',trans('admin.dish.cooking_description')) !!}
            {!! Form::textarea('cooking_description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            {!! $errors->first('cooking_description', '<div class="text-danger">:message</div>') !!}
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