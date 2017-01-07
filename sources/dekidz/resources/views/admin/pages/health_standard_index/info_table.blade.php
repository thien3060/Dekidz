<div class="row">
    <section class="col-lg-6 connectedSortable" id="weight-chart-wrapper">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i>{{ trans('admin.health_stadard_index.physical_info') }}</li>
            </ul>
            <div class="tab-content no-padding">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{ trans('admin.health_stadard_index.month') }}</th>
                        <th>{{ trans('admin.health_stadard_index.height') }}</th>
                        <th>{{ trans('admin.health_stadard_index.weight') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($current_student->physical_info as $info)
                        <tr>
                            <td>{{ $info->age }}</td>
                            <td>{{ $info->height }}</td>
                            <td>{{ $info->weight }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="col-lg-6 connectedSortable" id="weight-chart-wrapper">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i>{{ trans('admin.health_stadard_index.standard_index') }}</li>
            </ul>
            <div class="tab-content no-padding">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{ trans('admin.health_stadard_index.month') }}</th>
                        <th>{{ trans('admin.health_stadard_index.height') }}</th>
                        <th>{{ trans('admin.health_stadard_index.weight') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($health_index as $index)
                        @if($index->gender == $current_student->gender)
                            <tr>
                                <td>{{ $index->month }}</td>
                                <td>{{ $index->height }}</td>
                                <td>{{ $index->weight }}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>