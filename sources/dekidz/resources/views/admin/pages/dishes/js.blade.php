<script>
    var deleteItem = null;

    $('.asset-cost').each(function () {
        updateCost(this);
    });
    
    $('#asset-list').on('keydown', '.asset-price', function(e) {
        var code = e.keyCode || e.which;
        //tab event
        if (code === 9) {
            e.preventDefault();
            addRow();
            $(this).closest('tr').next().find('.asset-name').focus();
        }
    });

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
        $('#total-cost').val(total);
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
        calculateNutrition();
    }

    function selectFood(item) {
        item = $(item);
        var id = item.val();
        var row = item.parent().parent();
        var food = foodList[id];
        if (food) {
            row.find('.asset-price').val(food['price']);
        } else {
            row.find('.asset-price').val(0);
        }
        updateCost(item);
    }

    function calculateNutrition() {
        var nutritionList = {
            'calo': 0,
            'h2o': 0,
            'protid': 0,
            'lipid': 0,
            'glucid': 0,
            'cellulose': 0,
            'cholesterol': 0,
            'calci': 0,
            'photpho': 0,
            'iron': 0,
            'vitamin_caroten': 0,
            'vitamina': 0,
            'vitaminb1': 0,
            'vitaminb2': 0,
            'vitaminpp': 0,
            'vitaminc': 0,
        };
        $('#asset-list').find('tr').each(function(index, item) {
            item = $(item);
            var foodId = item.find('.asset-name').val();
            if (foodId == 0) {
                return;
            }
            var quantity = item.find('.asset-quantity').val();
            if (quantity != '') {
                quantity = parseFloat(quantity);
            } else {
                quantity = 0;
            }

            $.each(nutritionList, function(key, value) {
                nutritionList[key] = value + calculateEachNutrition(foodId, key, quantity);
            });
        });

        console.log(nutritionList);
        $.each(nutritionList, function(key, value) {
            $('#' + key).val(value);
        });
    }

    function calculateEachNutrition(foodId, nutrition, quantity) {
        if (foodList[foodId][nutrition]) {
            return foodList[foodId][nutrition] * quantity / foodList[foodId].quantity;
        }
        return 0;
    }

</script>