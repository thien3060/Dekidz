@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Thời Khóa Biểu</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="blog">
        <div class="container">
            @if(Auth::check() && @$class != null)
                <div class="row">
                    <div class="col-sm-12">
                        @include('frontend.partials.time_table')
                    </div>
                </div>
            @elseif(@$class == null)
                <h3>Xin vui lòng đăng nhập bằng tài khoản phụ huynh</h3>
            @else
                <h3>Xin vui lòng đăng nhập</h3>
            @endif
        </div>
        <br>
        <br>
    </section>
    <!--/#blog-->
@endsection

@section('inline-style')
    <style>
        .schedule:hover{
            background-color: #e9e9e9 !important;
        }

        .tooltip{
            position: absolute;
        }
    </style>
@endsection

@section('inline-script')
    @if(Auth::check() && @$class != null)
    <script>
        var teacher_list = {!! @json_encode($teachers) !!};
        var lesson_list = {!! @json_encode($lessons) !!};
        var lesson_goals = {!! @json_encode($lesson_goals) !!};
        var current_schedule_detail;
        console.log(lesson_goals);

        getTable(1);
        getTable(2);

        function getTable(semester) {
            var data = {_token : "{{csrf_token()}}", id : '{{@$class->id}}', semester: semester};

            $.post("/admin/teach_schedules/detail", data, function(data, status){
                current_schedule_detail = data;
                clearTable(semester);
                updateTimeTable(semester);
                setToolTip();
            });
        }

        function updateTimeTable(semester) {
            current_schedule_detail.forEach(function (element, index, array) {
                $('#time-table'+semester+' .schedule[data-day="'+ element.day +'"][data-period="'+ element.period +'"]')
                        .html('{{ trans('admin.teach_schedule.teacher') }}: '+ teacher_list[element.teacher] +'<br> {{ trans('admin.teach_schedule.lesson') }}: ' + lesson_list[element.lesson])
                        .attr('title', 'Nội Dung: '+lesson_goals[element.lesson]);
            });
        }

        function clearTable(semester) {
            $('#time-table'+semester+' .schedule').html('');
        }

        function setToolTip() {
            $('[data-toggle="tooltip"]').tooltip({
                container : 'body'
            });
        }
    </script>
    @endif
@endsection