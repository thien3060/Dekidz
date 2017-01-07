@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.staff.all') }}
        &middot;
        <small>{!! link_to_route('admin.staffs.create', trans('admin.public.add')) !!}</small>
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.staff.no') }}</th>
        <th>{{ trans('admin.staff.name') }}</th>
        <th>{{ trans('admin.staff.code') }}</th>
        <th>{{ trans('admin.staff.gender') }}</th>
        <th>{{ trans('admin.staff.dob') }}</th>
        <th>{{ trans('admin.staff.address') }}</th>
        <th>{{ trans('admin.staff.identity_card') }}</th>
        <th>{{ trans('admin.staff.department_id') }}</th>
        <th>{{ trans('admin.staff.phone') }}</th>
        <th>{{ trans('admin.staff.email') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($staffs as $staff)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $staff->name !!}</td>
                <td>{!! $staff->code !!}</td>
                <td>{!! $gender[$staff->gender] !!}</td>
                <td>{!! $staff->dob !!}</td>
                <td>{!! $staff->address !!}</td>
                <td>{!! $staff->identity_card !!}</td>
                <td>{!! $departments[$staff->department_id] !!}</td>
                <td>{!! $staff->phone !!}</td>
                <td>{!! $staff->email !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.staffs.edit', $staff->id) !!}">{{ trans('admin.public.edit') }}</a>
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
