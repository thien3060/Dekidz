<script>
$(function() {
    var height_chart = new Morris.Line({
        element: 'height-chart',
        resize: true,
        data: {!! json_encode($height_data) !!},
        xkey: 'y',
        ykeys: ['item1', 'item2'],
        labels: ['Student', 'Standard'],
        lineColors: ['#a0d0e0', '#3c8dbc'],
        hideHover: 'auto'
    });

    var height_chart = new Morris.Line({
        element: 'weight-chart',
        resize: true,
        data: {!! json_encode($weight_data) !!},
        xkey: 'y',
        ykeys: ['item1', 'item2'],
        labels: ['Student', 'Standard'],
        lineColors: ['#a0d0e0', '#3c8dbc'],
        hideHover: 'auto'
    });
});
</script>