@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.foods.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.foods.store']) !!}
@endif

<div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('name', trans('admin.food.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('food_group_id', trans('admin.food.food_group_id')) !!}
            <select class="form-control food-group-id" name="food_group_id">
                <option value="0">{{trans('admin.public.select')}}</option>
                @foreach($foodgroups as $key => $group)
                    <option value="{{$key}}" @if($key == @$model->food_group_id) selected="selected" @endif>{{$group}}</option>
                @endforeach
            </select>
            {!! $errors->first('food_group_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('animal_source', trans('admin.food.animal_source')) !!}
            <select class="form-control animal-source" name="animal_source">
                <option value="0">No</option>
                <option value="1" @if (@$model->animal_source == 1) selected="selected" @endif>Yes</option>
            </select>
            {!! $errors->first('animal_source', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('quantity', trans('admin.food.quantity')) !!}
            {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
            {!! $errors->first('quantity', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('unit', trans('admin.food.unit')) !!}
            {!! Form::text('unit', null, ['class' => 'form-control']) !!}
            {!! $errors->first('unit', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('price',trans('admin.food.price')) !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
            {!! $errors->first('price', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('absorb', trans('admin.food.absorb')) !!}
            {!! Form::text('absorb', null, ['class' => 'form-control']) !!}
            {!! $errors->first('absorb', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('digest', trans('admin.food.digest')) !!}
            {!! Form::text('digest', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipdigestid_dv', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('calo', trans('admin.food.calo')) !!}
            {!! Form::text('calo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calo', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('h2o', trans('admin.food.h2o')) !!}
            {!! Form::text('h2o', null, ['class' => 'form-control']) !!}
            {!! $errors->first('h2o', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('protid', trans('admin.food.protid')) !!}
            {!! Form::text('protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('lipid', trans('admin.food.lipid')) !!}
            {!! Form::text('lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('glucid', trans('admin.food.glucid')) !!}
            {!! Form::text('glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cellulose',trans('admin.food.cellulose')) !!}
            {!! Form::text('cellulose', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cellulose', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('cholesterol', trans('admin.food.cholesterol')) !!}
            {!! Form::text('cholesterol', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cholesterol', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('calci', trans('admin.food.calci')) !!}
            {!! Form::text('calci', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calci', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('photpho', trans('admin.food.photpho')) !!}
            {!! Form::text('photpho', null, ['class' => 'form-control']) !!}
            {!! $errors->first('photpho', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('iron',trans('admin.food.iron')) !!}
            {!! Form::text('iron', null, ['class' => 'form-control']) !!}
            {!! $errors->first('iron', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitamin_caroten', trans('admin.food.vitamin_caroten')) !!}
            {!! Form::text('vitamin_caroten', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamin_caroten', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitamina', trans('admin.food.vitamina')) !!}
            {!! Form::text('vitamina', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamina', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminb1',trans('admin.food.vitaminb1')) !!}
            {!! Form::text('vitaminb1', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb1', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminb2', trans('admin.food.vitaminb2')) !!}
            {!! Form::text('vitaminb2', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb2', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminpp', trans('admin.food.vitaminpp')) !!}
            {!! Form::text('vitaminpp', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminpp', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('vitaminc', trans('admin.food.vitaminc')) !!}
            {!! Form::text('vitaminc', null, ['class' => 'form-control']) !!}
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
{!! Form::close() !!}