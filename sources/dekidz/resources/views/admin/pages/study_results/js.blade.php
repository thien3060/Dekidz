<script>
    var lesson_list = {!! json_encode($lessons) !!};
    $('#class,#semester').change(function () {
        getLesson();
    });

    $('#lesson').change(function () {
        getStudentList();
    });

    init();

    function getLesson() {
        var id = $('#class').val();
        var semester = $('#semester').val();

        if(id != 0 && semester != 0){
            $.post("/admin/teach_schedules/lesson", {_token:'{{csrf_token()}}', class_id: id, semester: semester}, function (result) {
                $('#lesson option:gt(0)').remove();
                $.each(result, function(key,value) {
                    $('#lesson').append($("<option></option>")
                            .attr("value", value).text(lesson_list[value]));
                });
            })
        }
    }
    
    function getStudentList() {
        var data = {
            _token: '{{ csrf_token() }}',
            class_id: $('#class').val(),
            semester: $('#semester').val(),
            lesson_id: $('#lesson').val()
        };

        if(data.lesson_id != 0){
            $.post('/admin/study_results/detail', data, function (result) {
                if(result != null){
                    $('#student-list').html(result);
                }
            })
        }

    }

    function init() {
        getLesson();
        var selected_lesson = '{{ @$model['lesson_id'] }}';
        if(selected_lesson != ''){
            $('#lesson').val(selected_lesson);
            getStudentList();
        }
    }


    $("#student-list").on('keydown', '.input-number', function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: Ctrl+C
                (e.keyCode == 67 && e.ctrlKey === true) ||
                // Allow: Ctrl+X
                (e.keyCode == 88 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script>