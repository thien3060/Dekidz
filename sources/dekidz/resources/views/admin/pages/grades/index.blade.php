@extends($layout)

@section('content-header')
    <h1>
       {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.grades.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.grade.no')}}</th>
        <th>{{trans('admin.grade.name')}}</th>
        <th>{{trans('admin.grade.description')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($grades as $grade)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $grade->name !!}</td>
                <td>{!! $grade->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.grades.edit', $grade->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $grade, 'name' => 'grades'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($grades) !!}
    </div>
@stop
