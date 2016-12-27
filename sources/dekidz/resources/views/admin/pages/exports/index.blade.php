@extends($layout)

@section('content-header')
    <h1>
        All Exports
        &middot;
        <small>{!! link_to_route('admin.exports.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Export Date</th>
        {{--<th>Created By</th>--}}
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($exports as $export)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $export->date !!}</td>
                {{--<td>{!! $users[$export->created_by] !!}</td>--}}
                {{--<td>{!! $export->created_by !!}</td>--}}
                {{--<td>{!! $export->created_at !!}</td>--}}
                {{--<td>{!! $export->updated_at !!}</td>--}}
                <td class="text-center">
                    @include('admin::partials.modal', ['data' => $export, 'name' => 'exports'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($exports) !!}
    </div>
@stop
