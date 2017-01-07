@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.repository.suppliers.all') }}
        &middot;
        <small>{!! link_to_route('admin.suppliers.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>{{ trans('admin.supplier.no') }}</th>
        <th>{{ trans('admin.supplier.name') }}</th>
        <th>{{ trans('admin.supplier.type') }}</th>
        <th>{{ trans('admin.supplier.email') }}</th>
        <th>{{ trans('admin.supplier.phone') }}</th>
        <th>{{ trans('admin.supplier.product_type') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $supplier->name !!}</td>
                <td>{!! $supplier->type !!}</td>
                <td>{!! $supplier->email !!}</td>
                <td>{!! $supplier->phone !!}</td>
                <td>{!! $supplier->product_type !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.suppliers.edit', $supplier->id) !!}">{{ trans('admin.public.edit') }}</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $supplier, 'name' => 'suppliers'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div asset="text-center">
        {!! pagination_links($suppliers) !!}
    </div>

@stop
