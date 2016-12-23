<script>
var height_data = [];
var weight_data = [];
$(function() {
    hide_chart();
    $('#current-student').change(function () {
        var student_id = $(this).val();
        if(student_id != 0){
            get_info(student_id);
        }
    });

    $('#send-email').click(function () {
        var data = {
            _token: '{{ csrf_token() }}'
        };
        $.post('/admin/send_health_index', data, function (result) {
            console.log(result);
        })
    });
});

function get_info(student_id) {
    clear_chart();
    var data = {
        _token: '{{ csrf_token() }}',
        student_id: student_id
    };
    $.post('/admin/get_health_index', data, function (result) {
        $('#info-table').html(result['info-table']);
        height_data = result['height_data'];
        weight_data = result['weight_data'];
        draw_chart();
    })
}

function draw_chart() {
    if(height_data.length >= 1 && weight_data.length >= 1){
        show_chart();
        new Morris.Bar({
            element: 'height-chart',
            resize: true,
            data: height_data,
            xkey: 'y',
            ykeys: ['item1', 'item2'],
            labels: ['Student', 'Standard'],
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover: 'auto'
        });

        Morris.Bar({
            element: 'weight-chart',
            resize: true,
            data: weight_data,
            xkey: 'y',
            ykeys: ['item1', 'item2'],
            labels: ['Student', 'Standard'],
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover: 'auto'
        });
    }
    else {
        hide_chart();
    }
}

function clear_chart() {
    $('#height-chart').empty();
    $('#weight-chart').empty();
}

function hide_chart() {
    $('#height-chart-wrapper').hide();
    $('#weight-chart-wrapper').hide();
}

function show_chart() {
    $('#height-chart-wrapper').show();
    $('#weight-chart-wrapper').show();
}
</script>