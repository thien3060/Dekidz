<table class="table">
    <thead>
    <th width="5%">{{ trans('admin.study_result.no') }}</th>
    <th>{{ trans('admin.study_result.name') }}</th>
    <th>{{ trans('admin.study_result.point') }}</th>
    </thead>
    <tbody>
    <?php $no = 1 ?>
    @foreach($result_detail as $detail)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ @$students[$detail->student_id] }} {!! Form::hidden('student_id[]', $detail->student_id) !!} </td>
        <td>{!! Form::text('point[]', $detail->point, ['class' => 'form-control input-number']) !!}</td>
    </tr>
    @endforeach
    @if(empty($result_detail))
        <tr><td></td><td></td><td></td></tr>
    @endif
    </tbody>
</table>