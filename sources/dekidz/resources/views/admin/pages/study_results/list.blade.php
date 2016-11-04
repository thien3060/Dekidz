<table class="table">
    <thead>
    <th width="5%">No</th>
    <th>Student Name</th>
    <th>Points</th>
    </thead>
    <tbody>
    @foreach($result_detail as $detail)
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
    @if(empty($result_detail))
        <tr><td></td><td></td><td></td></tr>
    @endif
    </tbody>
</table>