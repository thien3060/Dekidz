@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.physical_infos.all') }}
        &middot;
        <small>{!! link_to_route('admin.physical_infos.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.physical_info.no') }}</th>
        <th>{{ trans('admin.physical_info.student_id') }}</th>
        <th>{{ trans('admin.physical_info.age') }}</th>
        <th>{{ trans('admin.physical_info.height') }}</th>
        <th>{{ trans('admin.physical_info.weight') }}</th>
        <th>{{ trans('admin.physical_info.BMI') }}</th>
        <th class="text-center">{{  trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($physical_infos as $physical_info)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $student_ids[$physical_info->student_id] !!}</td>
                <td>{!! $physical_info->age !!}</td>
                <td>{!! $physical_info->height !!}</td>
                <td>{!! $physical_info->weight !!}</td>
                <td>{!! $physical_info->BMI !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.physical_infos.edit', $physical_info->id) !!}">{{  trans('admin.public.edit') }}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $physical_info, 'name' => 'physical_infos'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($physical_infos) !!}
    </div>
@stop
