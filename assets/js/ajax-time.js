jQuery(document).ready(function ($) {
  $(".view-cst-timeline .form-select").on("change", function () {
    $('body').append('<div class="ajax-progress ajax-progress-fullscreen"></div>');
    let selectvalues = [];
    let filterwarp=$('#timelineContent');
    $(".form-select").each(function () {
      let val = $(this).val();
      if (val) selectvalues.push(val); // only add if not empty
    });
 
    $.ajax({
      type: "POST",
      dataType: "json",
      url: filter_ajax_obj.ajaxurl,
      data: {
        action: "get_filter_data",
        selected_value: selectvalues
      },
      success: function (response) {
        filterwarp.html(response.data);
        let $ajaxProgress = $(".ajax-progress");
        $ajaxProgress.remove();
        let $parentDiv = $(".view-filters__selected");
        console.log($parentDiv.find(".view-filters__selected-list li").length);
         if ($parentDiv.find(".view-filters__selected-list li").length === 1) {
          $parentDiv.remove();
          return;
        }
      },
      error: function (xhr, status, error) {
        alert("Your timeline could not be added");
      }
    });
    setTimeout(function () {
      // Use event delegation to handle dynamically updated elements
      $(document).off("click", ".view-filters__selected-list li a").on("click", ".view-filters__selected-list li a", function (e) {
      e.preventDefault();
      let valueToRemove = $(this).data("target");
      let selectElement = $('.form-select option[value="' + valueToRemove + '"]');
      if (selectElement.length) {
        selectElement.prop("selected", false);
        $(".form-select").trigger("change");
      }
      });
    }, 500);
    // setTimeout(function () {
    //   $('.view-filters__selected-list li a').on('click', function (e) {
    //     //alert("clicked");
    //     e.preventDefault();
    //     // After removing, check if any anchors left, if not remove parent div
    //     let $parentDiv = $(".view-filters__selected");
    //     console.log($parentDiv.find(".view-filters__selected-list li").length);
    //     if ($parentDiv.find(".view-filters__selected-list li").length === 2) {
    //       $parentDiv.remove();
    //       return;
    //     }
    //   });
    // }, 2000);
    
  });



});

jQuery(document).ready(function ($) {
  $(document).on("click", ".collapse-control-link", function (e) {
    e.preventDefault();

    let $this = $(this);
    let $wrapper = $this.closest(".collapse-control").prev(".collapse-wrapper");

    if ($this.attr("data-expanded") === "true") {
      // Hide
      $wrapper.removeAttr("style");
      $this.text("View More").attr("data-expanded", "false");
    } else {
      // Show
      $wrapper.css("display", "block");
      $this.text("View Less").attr("data-expanded", "true");
    }
  });
});

