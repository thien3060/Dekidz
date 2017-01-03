@extends($layout)

@section('content-header')
    <h1>
        All Cameras
        &middot;
        <small>{!! link_to_route('admin.cameras.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>URL</th>
        <th>Description</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($cameras as $camera)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $camera->name !!}</td>
                <td>{!! $camera->url !!}</td>
                <td>{!! $camera->description !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.cameras.edit', $camera->id) !!}">Edit</a>
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
