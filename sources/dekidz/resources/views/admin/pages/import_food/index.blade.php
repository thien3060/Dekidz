@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.import_food.all') }}
        &middot;
        <small>{!! link_to_route('admin.import_food.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.import_food.no') }}</th>
        <th>{{ trans('admin.import_food.date') }}</th>
        <th>{{ trans('admin.import_food.price') }}</th>
        <th>{{ trans('admin.import_food.created_by') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($imports as $import)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $import->date !!}</td>
                <td>{!! $import->total_cost !!}</td>
                <td>{!! $users[$import->created_by] !!}</td>
                <td class="text-center">
                    @include('admin::partials.modal', ['data' => $import, 'name' => 'import_food'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($imports) !!}
    </div>
@stop
