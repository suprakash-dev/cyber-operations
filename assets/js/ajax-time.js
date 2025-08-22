jQuery(document).ready(function($) {
    $(".view-cst-timeline .form-select").on("change", function () {
        var selectedValue = $(this).val();
         $.ajax({
            type : "POST",
            dataType : "json",
            url : filter_ajax_obj.ajaxurl,
            data : {action: "get_filter_data",
                    selected_value: selectedValue},
            success: function(response) {
                alert("Your vote was added successfully");
                alert(response.data);
            },
            error: function(xhr, status, error) {
                alert("Your vote could not be added");
            }
        });
    });
});