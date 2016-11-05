<table class="table">
    <thead>
    <th width="5%">No</th>
    <th>Student Name</th>
    <th>Points</th>
    </thead>
    <tbody>
    <?php $no = 1 ?>
    @foreach($result_detail as $detail)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ @$students[$detail->student_id] }}</td>
        <td>{{ $detail->point }}</td>
    </tr>
    @endforeach
    @if(empty($result_detail))
        <tr><td></td><td></td><td></td></tr>
    @endif
    </tbody>
</table>