@extends($layout)

@section('content-header')
    <h1>
        All food set type
        &middot;
        <small>{!! link_to_route('admin.foodsettypes.create', 'Add New') !!}</small>
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
        @foreach ($foodsettypes as $foodsettype)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $foodsettype->code !!}</td>
                <td>{!! $foodsettype->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foodsettypes.edit', $foodsettype->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $foodsettype, 'name' => 'foodsettypes'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($foodsettypes) !!}
    </div>

@stop
