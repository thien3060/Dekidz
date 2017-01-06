@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.departments.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.department.no')}}</th>
        <th>{{trans('admin.department.name')}}</th>
        <th>{{trans('admin.department.description')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $department->name !!}</td>
                <td>{!! $department->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.departments.edit', $department->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $department, 'name' => 'departments'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($departments) !!}
    </div>
@stop
