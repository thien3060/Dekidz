@extends($layout)

@section('content-header')
    <h1>
        All Staff's Salaries
    </h1>
@stop

@section('content')

    <table class="table">
        <thead>
        <th>No</th>
        <th>Name</th>
        <th>Base Salary</th>
        <th>Wage Index</th>
        <th>Bonus</th>
        <th>Minus</th>
        <th>Salary</th>
        <th class="text-center">Action</th>
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
                    <a href="{!! route('admin.salaries.edit', $salary->id) !!}">Edit</a>
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
