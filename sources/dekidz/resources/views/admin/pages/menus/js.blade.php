<script>
    var breakfast = {!! json_encode(@$breakfast) !!};
    var lunch = {!! json_encode(@$lunch) !!};
    var mid_afternoon = {!! json_encode(@$mid_afternoon) !!};
    var nutritional_requirements = {!! json_encode(@$nutritional_requirements) !!};

    var selected_breakfast = null;
    var selected_lunch = null;
    var selected_mid_afternoon = null;

    var nutrition = ['calo', 'h2o', 'protid', 'lipid', 'glucid', 'cellulose', 'cholesterol'];

    updateTotalNutrition();

    $('.food-set-select').change(function () {
        var selected = $(this);
        var name = selected.attr('name');
        if($(this).val() != 0){
            var temp = null;
            if(name == 'breakfast_id'){
                selected_breakfast = breakfast[$(this).val()];
                temp = selected_breakfast;
            }
            if(name == 'lunch_id'){
                selected_lunch = lunch[$(this).val()];
                temp = selected_lunch;
            }
            if(name == 'mid_afternoon_id'){
                selected_mid_afternoon = mid_afternoon[$(this).val()];
                temp = selected_mid_afternoon;
            }
            nutrition.forEach(function (item) {
                selected.parent().parent().find('.'+item).html(temp[item]);
            });
        }
        else{
            if(name == 'breakfast_id'){
                selected_breakfast = null;
            }
            if(name == 'lunch_id'){
                selected_lunch = null;
            }
            if(name == 'mid_afternoon_id'){
                selected_mid_afternoon = null;
            }
            nutrition.forEach(function (item) {
                $(this).parent().parent().closest('.'+item).html(0);
        });
        }
        updateTotalNutrition();
    });

    $('#age').keyup(function () {
        var requirements = nutritional_requirements[$(this).val()];
        if(requirements != null){
            nutrition.forEach(function (item) {
                $('.needed-'+item).html(requirements[item]);
            });
        }
        else {
            nutrition.forEach(function (item) {
                $('.needed-'+item).html('0');
            });
        }
    });

    function updateTotalNutrition() {
        nutrition.forEach(function (item) {
            var total = 0;
            total += selected_breakfast != null ? selected_breakfast[item] : 0;
            total += selected_lunch != null ? selected_lunch[item] : 0;
            total += selected_mid_afternoon != null ? selected_mid_afternoon[item] : 0;
            $('.total-'+item).html(total);
        });
    }
</script>