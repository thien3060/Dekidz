<script>
    updateTable();
    function updateTable() {
        var data = {
            _token : "{{csrf_token()}}",
            id : 1,
            semester: 1
        };

        $.get("/admin/teach_schedules/" + data.id, data, function(data, status){
            console.log(data);
        });
    }
</script>