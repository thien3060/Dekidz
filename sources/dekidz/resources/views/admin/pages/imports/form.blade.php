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
                            <input class="form-control" name=asset-name" id="asset-name" type="text">
                        </td>
                        <td>
                            <input class="form-control" name="asset-supplier" id="asset-supplier" type="text">
                        </td>
                        <td>
                            <input class="form-control" name="asset-quantity" id="asset-quantity" type="text">
                        </td>
                        <td>
                            <input class="form-control" name="asset-cost" id="asset-cost" type="text">
                        </td>
                        <td class="text-center">
                            <a href="" class="asset-add">Add</a>
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
{!! Form::close() !!}