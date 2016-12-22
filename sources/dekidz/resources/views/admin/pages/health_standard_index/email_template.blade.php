<!DOCTYPE html>
<html lang=&quot;en-US&quot;>
<head>
    <meta charset=&quot;utf-8&quot;>
    @include('admin::partials.style')
</head>
<body>
    <h5>Name: {{ $student->name }}</h5>
    <h5>DOB: {{ $student->dob}}</h5>
    <table class="table">
        <thead>
        <tr>
            <th>Month</th>
            <th>Height</th>
            <th>Standard height</th>
            <th>Weight</th>
            <th>Standard weight</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($health_index as $index)
            <tr>
                <td>{{ $index['age'] }}</td>
                <td>{{ $index['height'] }}</td>
                <td>{{ $index['standard_height'] }}</td>
                <td>{{ $index['weight'] }}</td>
                <td>{{ $index['standard_weight'] }}</td>
                <td>{{ $index['created_at'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('admin::partials.script')
</body>
</html>