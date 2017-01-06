@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.export_assets.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.export_assets.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('date', trans('admin.export_asset.date')) !!}
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
                <h3 class="box-title">{{trans('admin.export_asset.list_asset')}}</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">{{trans('admin.public.add')}}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>{{trans('admin.export_asset.no')}}</th>
                    <th>{{trans('admin.export_asset.name')}}</th>
                    <th>{{trans('admin.export_asset.quantity')}}</th>
                    <th class="text-center">{{trans('admin.public.action')}}</th>
                    </thead>
                    <tbody id="asset-list">
                    @if(isset($model))
                        @foreach($model->foods as $food)
                            <tr>
                                <td class="asset-id">1</td>
                                <td>
                                    <select class="form-control asset-name" name="asset-name[]">
                                        <option value="0">{{trans('admin.public.select')}}</option>
                                        @foreach($assets as $key => $asset)
                                            <option value="{{$key}}" @if($key == $food->id) selected="selected" @endif>{{$asset}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="0" name="asset-quantity[]" type="number"  value="{{$food->pivot->quantity}}">
                                </td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger asset-delete" onclick="confirmDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                        <td class="asset-id">1</td>
                        <td>
                            <select class="form-control asset-name" name="asset-name[]">
                                <option value="0" selected="selected">{{trans('admin.public.select')}}</option>
                                @foreach($assets as $key => $asset)
                                    <option value="{{$key}}">{{$asset}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="form-control asset-quantity" onkeyup="updateCost(this);" onchange="updateCost(this);" placeholder="0" name="asset-quantity[]" type="number">
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
                <button type="button" class="btn btn-primary" onclick="deleteCurrentItem()">{{trans('admin.public.yes')}}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.public.no')}}</button>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}