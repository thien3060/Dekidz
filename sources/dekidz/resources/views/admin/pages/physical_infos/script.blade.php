<script>

    $('#height').keyup(bmiCalculate);
    $('#weight').keyup(bmiCalculate);
    function bmiCalculate() {
        var height = 1;
        var weight = 0;
        var txtHeight = $('#height').val();
        var txtWeight = $('#weight').val();
        if (txtHeight != '') {
            height =  parseFloat(txtHeight);
        }
        if (txtWeight != '') {
            weight =  parseFloat(txtWeight);
        }

        var bmi = (weight / (height / 100 * height / 100)).toFixed(2);
        $('#BMI').val(bmi);
    }
</script>