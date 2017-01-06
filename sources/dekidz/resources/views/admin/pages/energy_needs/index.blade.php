@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.energy_needs.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{trans('admin.energy_need.no')}}</th>
        <th>{{trans('admin.energy_need.age')}}</th>
        <th>{{trans('admin.energy_need.calo')}}</th>
        <th>{{trans('admin.energy_need.h2o')}}</th>
        <th>{{trans('admin.energy_need.protid')}}</th>
        <th>{{trans('admin.energy_need.lipid')}}</th>
        <th>{{trans('admin.energy_need.glucid')}}</th>
        <th>{{trans('admin.energy_need.cellulose')}}</th>
        <th>{{trans('admin.energy_need.cholesterol')}}</th>
        <th>{{trans('admin.energy_need.calci')}}</th>
        <th>{{trans('admin.energy_need.photpho')}}</th>
        <th>{{trans('admin.energy_need.iron')}}</th>
        <th>{{trans('admin.energy_need.vitamin_caroten')}}</th>
        <th>{{trans('admin.energy_need.vitamina')}}</th>
        <th>{{trans('admin.energy_need.vitaminb1')}}</th>
        <th>{{trans('admin.energy_need.vitaminb2')}}</th>
        <th>{{trans('admin.energy_need.vitaminpp')}}</th>
        <th>{{trans('admin.energy_need.vitaminc')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($energy_needs as $energy_need)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $energy_need->age !!}</td>
                <td>{!! $energy_need->calo !!}</td>
                <td>{!! $energy_need->h2o !!}</td>
                <td>{!! $energy_need->protid !!}</td>
                <td>{!! $energy_need->lipid !!}</td>
                <td>{!! $energy_need->glucid !!}</td>
                <td>{!! $energy_need->cellulose !!}</td>
                <td>{!! $energy_need->cholesterol !!}</td>
                <td>{!! $energy_need->calci !!}</td>
                <td>{!! $energy_need->photpho !!}</td>
                <td>{!! $energy_need->iron !!}</td>
                <td>{!! $energy_need->vitamin_caroten !!}</td>
                <td>{!! $energy_need->vitamina !!}</td>
                <td>{!! $energy_need->vitaminb1 !!}</td>
                <td>{!! $energy_need->vitaminb2 !!}</td>
                <td>{!! $energy_need->vitaminpp !!}</td>
                <td>{!! $energy_need->vitaminc !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.energy_needs.edit', $energy_need->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $energy_need, 'name' => 'energy_needs'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($energy_needs) !!}
    </div>

@stop
