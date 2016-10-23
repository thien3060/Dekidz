@extends($layout)

@section('content-header')
    <h1>
        Detail Info
        &middot;
        <small>{!! link_to_route('admin.foods.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')
    <table>
        <tr>
            <td>Name: </td>
            <td>{{$food->name}}</td>
        </tr>
        <tr>
            <td>Group: </td>
            <td>{{$food->food_group_id}}</td>
        </tr>
        <tr>
            <td>Unit: </td>
            <td>{{$food->unit}}</td>
        </tr>
    </table>
@stop

@section('script')

@endsection