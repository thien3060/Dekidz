<script>
    var deleteItem = null;
    
    $('#asset-list').on('keydown', '.asset-price', function(e) {
        var code = e.keyCode || e.which;
        //tab event
        if (code === 9) {
            e.preventDefault();
            addRow();
            $(this).closest('tr').next().find('.asset-name').focus();
        }
    });

    $('#asset-list').on('change', '.asset-name', function () {
        $(this).parent().parent().find('.asset-id').html($(this).val());
    });

    /*var selectedItem = null;
    $('#asset-list').on('focusout', '.asset-name', function(e) {
        if(!$('.asset-select').is(":hover")) {
            $('.asset-select').offset({ top: 0, left: 0}).hide();
        }
    });

    $('.asset-select').on('click', 'li', function () {
        selectAsset(this);
    });
    function selectAsset(selected) {
        selectedItem.val($(selected).html());
    }
    function showHint(item) {
        var tb = $(item);
        var offset = tb.offset();
        $('.asset-select').offset({ top: offset.top + tb.outerHeight(), left: offset.left}).show();
        selectedItem = tb;
    }*/

    function confirmDelete(item) {
        deleteItem = $(item);
        $('#modal-delete-confirm').modal('show');
    }

    function deleteCurrentItem() {
        if(deleteItem != null){
            deleteItem.closest('tr').remove();
            $('#modal-delete-confirm').modal('hide');
            deleteItem = null;
            updateTotalCost();
            updateIndicatorNumber();
        }
    }
    
    function addRow(name, supplier, quantity, price, cost) {
        var row = $('#asset-list tr').first().clone();
        row.find('.asset-name').val(name);
        row.find('.asset-supplier').val(supplier);
        row.find('.asset-quantity').val(quantity);
        row.find('.asset-price').val(price);
        row.find('.asset-cost').val(0);
        row.appendTo('#asset-list');
        updateTotalCost();
        updateIndicatorNumber();
    }

    function updateIndicatorNumber() {
        $('#asset-list').find('.asset-id').each(function(index, item) {
            $(item).html(index + 1);
        });
    }

    function updateTotalCost() {
        var total = 0;
        var list = $('#asset-list');
        list.find('.asset-cost').each(function(index, item) {
            var cost = $(item).val();
            if (cost != '') {
                total += parseFloat(cost);
            }
        });
        $('#total-label').html(total);
    }

    function updateCost(txt) {
        var row = $(txt).parent().parent();
        var price = row.find('.asset-price').val();
        var quantity = row.find('.asset-quantity').val();
        var cost = 0;
        if (quantity != '' && price != '') {
            cost = parseFloat(price) * parseFloat(quantity);
        }
        row.find('.asset-cost').val(cost);
        updateTotalCost();
    }
</script>