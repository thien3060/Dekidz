<script>
    var lesson_list = {!! json_encode($lessons) !!};
    $('#class,#semester').change(function () {
        getLesson();
    });

    $('#lesson').change(function () {
        getStudentList();
    });

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
</script>