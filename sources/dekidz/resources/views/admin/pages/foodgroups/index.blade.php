@extends($layout)

@section('content-header')
    <h1>
        All foodgroups
        &middot;
        <small>{!! link_to_route('admin.foodgroups.create', 'Add New') !!}</small>
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
        @foreach ($foodgroups as $foodgroup)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $foodgroup->code !!}</td>
                <td>{!! $foodgroup->name !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foodgroups.edit', $foodgroup->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $foodgroup, 'name' => 'foodgroups'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($foodgroups) !!}
    </div>

@stop
