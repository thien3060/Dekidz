@extends($layout)

@section('content-header')
    <h1>
        All Staffs
        &middot;
        <small>{!! link_to_route('admin.staffs.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Number</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Identity Number</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Email</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($staffs as $staff)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $staff->name !!}</td>
                <td>{!! $staff->number !!}</td>
                <td>{!! $staff->gender !!}</td>
                <td>{!! $staff->dob !!}</td>
                <td>{!! $staff->address !!}</td>
                <td>{!! $staff->identity_card !!}</td>
                <td>{!! $staff->department_id !!}</td>
                <td>{!! $staff->phone !!}</td>
                <td>{!! $staff->email !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.staffs.edit', $staff->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $staff, 'name' => 'staffs'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($staffs) !!}
    </div>
@stop
