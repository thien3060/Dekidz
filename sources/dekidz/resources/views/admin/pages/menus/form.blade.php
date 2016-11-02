@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.menus.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.menus.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group col-sm-3">
                {!! Form::label('age', 'Age:') !!}
                <input class="form-control" placeholder="Age" type="number" id="age">
            </div>
            {!! Form::label('date', 'Date:') !!}
            <div class="input-group date col-sm-3">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker', 'placeholder' => 'Date']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>

        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Food Set list</h3>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                    <th>Time</th>
                    <th>Food Set</th>
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
                            <td>Breakfast</td>
                            <td>
                                <select class="form-control food-set-select" name="breakfast_id">
                                    <option value="0">Select food set</option>
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
                            <td>Lunch</td>
                            <td>
                                <select class="form-control food-set-select" name="lunch_id">
                                    <option value="0">Select food set</option>
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
                            <td>Mid Afternoon</td>
                            <td>
                                <select class="form-control food-set-select" name="mid_afternoon_id">
                                    <option value="0">Select food set</option>
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
                <h3 class="box-title">Nutrition Needed</h3>
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
                        <td>Total</td>
                        <td class="total-calo">0</td>
                        <td class="total-h2o">0</td>
                        <td class="total-protid">0</td>
                        <td class="total-lipid">0</td>
                        <td class="total-glucid">0</td>
                        <td class="total-cellulose">0</td>
                        <td class="total-cholesterol">0</td>
                    </tr>
                    <tr>
                        <td>Needed</td>
                        <td class="needed-calo"></td>
                        <td class="needed-h2o"></td>
                        <td class="needed-protid"></td>
                        <td class="needed-lipid"></td>
                        <td class="needed-glucid"></td>
                        <td class="needed-cellulose"></td>
                        <td class="needed-cholesterol"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}