@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.menus.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.menus.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group col-sm-3">
                {!! Form::label('age', trans('admin.menu.age').':') !!}
                <input class="form-control" placeholder="{{trans('admin.menu.age')}}" type="number" id="age">
            </div>
            {!! Form::label('date', trans('admin.menu.date').':') !!}
            <div class="input-group date col-sm-3">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker', 'placeholder' => trans('admin.menu.date')]) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>

        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.menu.list_food_set')}}</h3>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <th>{{trans('admin.menu.time')}}</th>
                    <th>{{trans('admin.menu.food_set')}}</th>
                    <th>Calo</th>
                    <th>H2O</th>
                    <th>Protid</th>
                    <th>Lipid</th>
                    <th>Glucid</th>
                    <th>Cellulose</th>
                    <th>Cholesterol</th>
                    </thead>
                    <tbody id="food-set-list">
                        <tr>
                            <td>{{trans('admin.menu.breakfast_id')}}</td>
                            <td>
                                <select class="form-control food-set-select" name="breakfast_id">
                                    <option value="0">{{trans('admin.menu.select_food_set')}}</option>
                                    @foreach($breakfast as $key => $item)
                                        <option value="{{$key}}" @if($key == @$model->breakfast_id) selected="selected" @endif>{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="calo">0</td>
                            <td class="h2o">0</td>
                            <td class="protid">0</td>
                            <td class="lipid">0</td>
                            <td class="glucid">0</td>
                            <td class="cellulose">0</td>
                            <td class="cholesterol">0</td>
                        </tr>
                        <tr>
                            <td>{{trans('admin.menu.lunch_id')}}</td>
                            <td>
                                <select class="form-control food-set-select" name="lunch_id">
                                    <option value="0">{{trans('admin.menu.select_food_set')}}</option>
                                    @foreach($lunch as $key => $item)
                                        <option value="{{$key}}" @if($key == @$model->lunch_id) selected="selected" @endif>{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="calo">0</td>
                            <td class="h2o">0</td>
                            <td class="protid">0</td>
                            <td class="lipid">0</td>
                            <td class="glucid">0</td>
                            <td class="cellulose">0</td>
                            <td class="cholesterol">0</td>
                        </tr>
                        <tr>
                            <td>{{trans('admin.menu.mid_afternoon_id')}}</td>
                            <td>
                                <select class="form-control food-set-select" name="mid_afternoon_id">
                                    <option value="0">{{trans('admin.menu.select_food_set')}}</option>
                                    @foreach($mid_afternoon as $key => $item)
                                        <option value="{{$key}}" @if($key == @$model->mid_afternoon_id) selected="selected" @endif>{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="calo">0</td>
                            <td class="h2o">0</td>
                            <td class="protid">0</td>
                            <td class="lipid">0</td>
                            <td class="glucid">0</td>
                            <td class="cellulose">0</td>
                            <td class="cholesterol">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.menu.nutrition_requirement')}}</h3>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Calo</th>
                    <th>H2O</th>
                    <th>Protid</th>
                    <th>Lipid</th>
                    <th>Glucid</th>
                    <th>Cellulose</th>
                    <th>Cholesterol</th>
                    </thead>
                    <tbody id="food-set-list">
                    <tr>
                        <td>{{trans('admin.menu.total')}}</td>
                        <td class="total-calo">0</td>
                        <td class="total-h2o">0</td>
                        <td class="total-protid">0</td>
                        <td class="total-lipid">0</td>
                        <td class="total-glucid">0</td>
                        <td class="total-cellulose">0</td>
                        <td class="total-cholesterol">0</td>
                    </tr>
                    <tr>
                        <td>{{trans('admin.menu.needed')}}</td>
                        <td class="needed-calo">0</td>
                        <td class="needed-h2o">0</td>
                        <td class="needed-protid">0</td>
                        <td class="needed-lipid">0</td>
                        <td class="needed-glucid">0</td>
                        <td class="needed-cellulose">0</td>
                        <td class="needed-cholesterol">0</td>
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
{!! Form::close() !!}