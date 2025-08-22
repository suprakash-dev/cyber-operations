jQuery(document).ready(function($) {
    $(".view-cst-timeline .form-select").on("change", function () {
        var selectedValue = $(this).val();
        console.log("Selected value:", selectedValue);
    });
});