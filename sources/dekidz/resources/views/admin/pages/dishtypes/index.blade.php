@extends($layout)

@section('content-header')
    <h1>
        All dish types
        &middot;
        <small>{!! link_to_route('admin.dishtypes.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>No</th>
        <th>Code</th>
        <th>Name</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($dishtypes as $dishtype)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $dishtype->code !!}</td>
                <td>{!! $dishtype->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.dishtypes.edit', $dishtype->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $dishtype, 'name' => 'dishtypes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($dishtypes) !!}
    </div>

@stop
