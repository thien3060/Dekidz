@extends($layout)

@section('content-header')
    <h1>
        Detail Info
        &middot;
        <small>{!! link_to_route('admin.tuition_fees.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')
    <table>
        <tr>
            <td>Student: </td>
            <td>{{$tuition_fee->student_id}}</td>
        </tr>
        <tr>
            <td>Paid: </td>
            <td>{{$tuition_fee->paid}}</td>
        </tr>
        <tr>
            <td>Dept: </td>
            <td>{{$tuition_fee->dept}}</td>
        </tr>
        <tr>
            <td>Year: </td>
            <td>{{$tuition_fee->year}}</td>
        </tr>
        <tr>
            <td>Month: </td>
            <td>{{$tuition_fee->month}}</td>
        </tr>
    </table>
@stop

@section('script')

@endsection