@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.import_asset.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.import_asset.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('date', trans('admin.import_asset.date').':') !!}
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
                <h3 class="box-title">{{ trans('admin.import_asset.list') }}</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">{{trans('admin.public.add')}}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>{{ trans('admin.import_asset.no') }}</th>
                    <th>{{ trans('admin.import_asset.name') }}</th>
                    <th>{{ trans('admin.import_asset.quantity') }}</th>
                    <th>{{ trans('admin.import_asset.price') }}</th>
                    <th>{{ trans('admin.import_asset.cost') }}</th>
                    <th class="text-center">{{trans('admin.public.action')}}</th>
                    </thead>
                    <tbody id="asset-list">
                    <?php $k = -1;?>
                        @if(isset($model))
                            @foreach($model->assets as $k => $item)
                                <tr>
                                    <td class="asset-id">{{$k + 1}}</td>
                                    <td>
                                        <select class="form-control asset-name" name="asset-name[]">
                                            <option value="0">{{ trans('admin.import_asset.select') }}</option>
                                            @foreach($assets as $key => $asset)
                                                <option value="{{$key}}" @if($key == $item->id) selected="selected" @endif>{{$asset}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's quantity" name="asset-quantity[]" type="number"  value="{{$item->pivot->quantity}}">
                                    </td>
                                    <td>
                                        <input class="form-control asset-price" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="Asset's price" name="asset-price[]" type="number" value="{{$item->pivot->price}}">
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
                            <td class="asset-id">{{$k + 2}}</td>
                            <td>
                                <select class="form-control asset-name" name="asset-name[]">
                                    <option value="0" selected="selected">{{ trans('admin.import_asset.select') }}</option>
                                    @foreach($assets as $key => $asset)
                                        <option value="{{$key}}">{{$asset}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="{{ trans('admin.import_asset.quantity') }}" name="asset-quantity[]" type="number">
                            </td>
                            <td>
                                <input class="form-control asset-price" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="{{ trans('admin.import_asset.price') }}" name="asset-price[]" type="number">
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
                                <td colspan="5" class="text-right"><strong>{{trans('admin.import_asset.total').':'}} </strong></td>
                                <td colspan="2" id="total-label" class="text-left">0</td>
                                <input type="hidden" id="total-cost" name="total_cost"/>
                            </tr>
                        </tbody>
                    </tbody>
                </table>
            </div>
        </div>

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