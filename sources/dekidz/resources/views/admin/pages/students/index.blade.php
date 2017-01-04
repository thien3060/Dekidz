@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.puclic.title_all') }}
        &middot;
        <small>{!! link_to_route('admin.students.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.student.no') }}</th>
        <th>{{ trans('admin.student.name') }}</th>
        <th>{{ trans('admin.student.email') }}</th>
        <th>{{ trans('admin.student.dob') }}</th>
        <th>{{ trans('admin.student.address') }}</th>
        <th>{{ trans('admin.student.father_phone') }}</th>
        <th>{{ trans('admin.student.mother_phone') }}</th>
        <th>{{ trans('admin.student.admission_date') }}</th>
        <th>{{ trans('admin.student.entry_card') }}</th>
        <th class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $student->name !!}</td>
                <td>{!! $student->email !!}</td>
                <td>{!! $student->dob !!}</td>
                <td>{!! $student->address !!}</td>
                <td>{!! $student->father_phone !!}</td>
                <td>{!! $student->mother_phone !!}</td>
                <td>{!! $student->admission_date !!}</td>
                <td>{!! $student->entry_card !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.students.edit', $student->id) !!}">{{ trans('admin.public.title_edit') }}</a>
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
