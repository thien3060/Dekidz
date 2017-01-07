<script>
    var teacher_list = {!! @json_encode($teachers) !!};
    var lesson_list = {!! @json_encode($lessons) !!};
    var current_schedule = { class_id: 0, semester: 0};
    var current_schedule_detail;
    var selected_schedule = { period: 0, day: 0, teacher: 0, lesson: 0};

    updateCurrentSchedule();
    getTable();

    $('#class_id,#semester').change(function () {
        updateCurrentSchedule();
        getTable();
    });

    $('#teacher,#lesson').change(function () {
        selected_schedule.teacher = $('#teacher').val();
        selected_schedule.lesson = $('#lesson').val();
    });

    $('.schedule').click(function () {
        selected_schedule.day = $(this).data('day');
        selected_schedule.period = $(this).data('period');
        selected_schedule.teacher = $(this).data('teacher');
        selected_schedule.lesson = $(this).data('lesson');
        $('#modal-schedule-update').modal('show');
        $('#teacher').val(selected_schedule.teacher);
        $('#lesson').val(selected_schedule.lesson);
    });

    function getTable() {
        var data = {_token : "{{csrf_token()}}", id : current_schedule.class_id, semester: current_schedule.semester};

        $.post("/admin/teach_schedules/detail", data, function(data, status){
            current_schedule_detail = data;
            clearTable();
            updateTimeTable();
        });
    }

    function updateTimeTable() {
        current_schedule_detail.forEach(function (element, index, array) {
            $('.schedule[data-day="'+ element.day +'"][data-period="'+ element.period +'"]')
                    .html('{{ trans('admin.teach_schedule.teacher') }}: '+ teacher_list[element.teacher] +'<br> {{ trans('admin.teach_schedule.lesson') }}: ' + lesson_list[element.lesson])
                    .data('teacher', element.teacher)
                    .data('lesson', element.lesson);
        });
    }

    function updateCurrentSchedule() {
        current_schedule.class_id = $('#class_id').val();
        current_schedule.semester = $('#semester').val();
    }
    
    function updateSchedule() {
        var data = {_token : "{{csrf_token()}}", schedule: current_schedule, schedule_detail: selected_schedule};
        $.post("/admin/teach_schedules/update", data, function(data, status){
            getTable();
            $('#modal-schedule-update').modal('hide');
        });
    }

    function clearTable() {
        $('.schedule').html('');
    }
</script>