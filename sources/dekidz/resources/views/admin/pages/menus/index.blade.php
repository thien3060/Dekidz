@extends($layout)

@section('content-header')
    <h1>
        All Foods
        &middot;
        <small>{!! link_to_route('admin.menus.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Date</th>
        <th>Breakfast</th>
        <th>Lunch</th>
        <th>Mid Afternoon</th>
        <th>Create At</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($menus as $menu)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $menu->date !!}</td>
                <td>{!! $menu->breakfast_id !!}</td>
                <td>{!! $menu->lunch_id !!}</td>
                <td>{!! $menu->mid_afternoon_id !!}</td>
                <td>{!! $menu->created_at !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.menus.edit', $menu->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $menu, 'name' => 'menus'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($menus) !!}
    </div>
@stop
