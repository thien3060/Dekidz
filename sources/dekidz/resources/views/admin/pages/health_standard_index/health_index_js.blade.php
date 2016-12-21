<script>
$(function() {
    var area = new Morris.Area({
        element: 'revenue-chart',
        resize: true,
        data: {!! json_encode($height_data) !!},
        xkey: 'y',
        ykeys: ['item1', 'item2'],
        labels: ['Item 1', 'Item 2'],
        lineColors: ['#a0d0e0', '#3c8dbc'],
        hideHover: 'auto'
    });
});
</script>