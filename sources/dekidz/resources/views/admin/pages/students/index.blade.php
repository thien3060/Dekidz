@extends($layout)

@section('content-header')
    <h1>
        All Students
        &middot;
        <small>{!! link_to_route('admin.students.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Father's Phone</th>
        <th>Mother's Phone</th>
        <th>Admission Date</th>
        <th>Entry card number</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $student->name !!}</td>
                <td>{!! $student->dob !!}</td>
                <td>{!! $student->address !!}</td>
                <td>{!! $student->father_phone !!}</td>
                <td>{!! $student->mother_phone !!}</td>
                <td>{!! $student->admission_date !!}</td>
                <td>{!! $student->entry_card !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.students.edit', $student->id) !!}">Edit</a>
                    &middot;
                    @include('admin::partials.modal', ['data' => $student, 'name' => 'students'])
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($students) !!}
    </div>
@stop
