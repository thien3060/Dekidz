@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.all')}}
        &middot;
        <small>{!! link_to_route('admin.cameras.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{trans('admin.camera.no')}}</th>
        <th>{{trans('admin.camera.name')}}</th>
        <th>{{trans('admin.camera.url')}}</th>
        <th>{{trans('admin.camera.description')}}</th>
        <th class="text-center">{{trans('admin.public.action')}}</th>
        </thead>
        <tbody>
        @foreach ($cameras as $camera)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $camera->name !!}</td>
                <td>{!! $camera->url !!}</td>
                <td>{!! $camera->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.cameras.edit', $camera->id) !!}">{{trans('admin.public.edit')}}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $camera, 'name' => 'cameras'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($cameras) !!}
    </div>
@stop
