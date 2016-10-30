@extends($layout)

@section('content-header')
    <h1>
        All suppliers
        &middot;
        <small>{!! link_to_route('admin.suppliers.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Product Type</th>
        <th class="text-center">Action</th>
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
                    <a href="{!! route('admin.suppliers.edit', $supplier->id) !!}">Edit</a>
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
