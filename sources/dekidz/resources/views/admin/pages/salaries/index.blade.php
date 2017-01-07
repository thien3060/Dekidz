@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.salary.all') }}
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>{{ trans('admin.salary.no') }}</th>
        <th>{{ trans('admin.salary.staff_id') }}</th>
        <th>{{ trans('admin.salary.base_salary') }}y</th>
        <th>{{ trans('admin.salary.wage_index') }}</th>
        <th>{{ trans('admin.salary.bonus') }}</th>
        <th>{{ trans('admin.salary.minus') }}</th>
        <th>{{ trans('admin.salary.salary') }}</th>
        <th class="text-center">{{ trans('admin.public.action') }}</th>
        </thead>
        <tbody>
        @foreach ($salaries as $salary)
            <tr>
                <td>{!! $no !!}</td>
                <td>{!! $salary->staff->name !!}</td>
                <td>{!! $salary->base_salary !!}</td>
                <td>{!! $salary->wage_index !!}</td>
                <td>{!! $salary->bonus !!}</td>
                <td>{!! $salary->minus !!}</td>
                <td>{!! $salary->salary !!}</td>
                <td class="text-center">
                    <a href="{!! route('admin.salaries.edit', $salary->id) !!}">{{ trans('admin.public.edit') }}</a>
                </td>
            </tr>
            <?php $no++ ;?>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! pagination_links($salaries) !!}
    </div>
@stop
