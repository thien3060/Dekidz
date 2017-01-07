@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.maintenance_ballots.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.maintenance_ballots.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('date', trans('admin.maintenance_ballot.date').':') !!}
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
                <h3 class="box-title">{{ trans('admin.maintenance_ballot.list') }}</h3>
                <button type="button" class="btn btn-success asset-delete" onclick="addRow()" style="margin: 5px">{{trans('admin.public.add')}}</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
                <table class="table">
                    <thead>
                    <th>{{ trans('admin.maintenance_ballot.no') }}</th>
                    <th>{{ trans('admin.maintenance_ballot.name') }}</th>
                    <th>{{ trans('admin.maintenance_ballot.quantity') }}</th>
                    <th>{{ trans('admin.maintenance_ballot.status') }}</th>
                    <th class="text-center">{{ trans('admin.public.action') }}</th>
                    </thead>
                    <tbody id="asset-list">
                    @if(isset($model))
                        @foreach($model->foods as $food)
                            <tr>
                                <td class="asset-id">0</td>
                                <td>
                                    <select class="form-control asset-name" name="asset-name[]">
                                        <option value="0">{{ trans('admin.maintenance_ballot.select') }}</option>
                                        @foreach($assets as $key => $asset)
                                            <option value="{{$key}}" @if($key == $food->id) selected="selected" @endif>{{$asset}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control asset-quantity" placeholder="{{ trans('admin.maintenance_ballot.quantity') }}" name="asset-quantity[]" type="number"  value="{{$food->pivot->quantity}}">
                                </td>
                                <td>
                                    <input class="form-control asset-status" placeholder="{{ trans('admin.maintenance_ballot.status') }}" name="asset-status[]" type="text"  value="{{$food->pivot->status}}">
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
                                <option value="0" selected="selected">{{ trans('admin.maintenance_ballot.select') }}</option>
                                @foreach($assets as $key => $asset)
                                    <option value="{{$key}}">{{$asset}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="form-control asset-quantity" placeholder="{{ trans('admin.maintenance_ballot.quantity') }}" name="asset-quantity[]" type="number"  >
                        </td>
                        <td>
                            <input class="form-control asset-status" placeholder="{{ trans('admin.maintenance_ballot.status') }}" name="asset-status[]" type="text" >
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