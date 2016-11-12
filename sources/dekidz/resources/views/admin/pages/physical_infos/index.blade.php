@extends($layout)

@section('content-header')
    <h1>
        All Physical Info
        &middot;
        <small>{!! link_to_route('admin.physical_infos.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Student</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Height</th>
        <th>Weight</th>
        <th>BMI</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($physical_infos as $physical_info)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $student_ids[$physical_info->student_id] !!}</td>
                <td><?php echo ($physical_info->gender == 0) ? 'Nữ' : 'Nam'; ?></td>
                <td>{!! $physical_info->age !!}</td>
                <td>{!! $physical_info->height !!}</td>
                <td>{!! $physical_info->weight !!}</td>
                <td>{!! $physical_info->BMI !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.physical_infos.edit', $physical_info->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $physical_info, 'name' => 'physical_infos'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($physical_infos) !!}
    </div>
@stop
