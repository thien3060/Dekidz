<script>
    $('#asset-list').on('click', '.asset-add', function (event) {
        event.preventDefault();
        $('#asset-list').prepend('<tr>' +
                '<td>#</td>' +
                '<td>'+ $('#asset-name').val() +'</td>' +
                '<td>'+ $('#asset-supplier').val() +'</td>' +
                '<td>'+ $('#asset-quantity').val() +'</td>' +
                '<td>'+ $('#asset-cost').val() +'</td>' +
                '<td></td></tr>');
    });
</script>