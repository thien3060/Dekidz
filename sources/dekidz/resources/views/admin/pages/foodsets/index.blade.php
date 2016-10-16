@extends($layout)

@section('content-header')
    <h1>
        All FoodSets
        &middot;
        <small>{!! link_to_route('admin.foodsets.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Age</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Cal</th>
        <th>Cal needed</th>
        <th>Protid</th>
        <th>Protid needed</th>
        <th>Lipid</th>
        <th>Lipid needed</th>
        <th>Glucid</th>
        <th>Glucid needed</th>
        <th>PLG proportion</th>
        <th>PLD proportion needed</th>
        <th>Cal proportion</th>
        <th>Protid Porportion</th>
        <th>Lipid Proportion</th>
        <th>Glucid Proportion</th>
        <th>Protid DV</th>
        <th>Protid TV</th>
        <th>Lipid DV</th>
        <th>Lipid TV</th>
        <th>Total cost</th>

        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($foodsets as $foodset)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $foodset->name !!}</td>
                <td>{!! $foodset->type_id !!}</td>
                <td>{!! $foodset->age !!}</td>
                <td>{!! $foodset->quantity !!}</td>
                <td>{!! $foodset->description !!}</td>
                <td>{!! $foodset->cal !!}</td>
                <td>{!! $foodset->cal_needed !!}</td>
                <td>{!! $foodset->protid !!}</td>
                <td>{!! $foodset->protid_needed !!}</td>
                <td>{!! $foodset->lipid !!}</td>
                <td>{!! $foodset->lipid_needed !!}</td>
                <td>{!! $foodset->glucid !!}</td>
                <td>{!! $foodset->glucid_needed !!}</td>
                <td>{!! $foodset->plg_proportion !!}</td>
                <td>{!! $foodset->plg_proportion_needed !!}</td>
                <td>{!! $foodset->cal_proportion !!}</td>
                <td>{!! $foodset->protid_proportion !!}</td>
                <td>{!! $foodset->lipid_proportion !!}</td>
                <td>{!! $foodset->glucid_proportion !!}</td>
                <td>{!! $foodset->lipid_proportion !!}</td>
                <td>{!! $foodset->protid_dv !!}</td>
                <td>{!! $foodset->protid_tv !!}</td>
                <td>{!! $foodset->lipid_dv !!}</td>
                <td>{!! $foodset->lipid_tv !!}</td>
                <td>{!! $foodset->total_cost !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.foodsets.edit', $foodset->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $foodset, 'name' => 'foodsets'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($foodsets) !!}
    </div>
@stop
