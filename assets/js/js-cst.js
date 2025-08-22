"use strict";
(function ($, Drupal) {
  Drupal.behaviors.cst = {
    attach: function (context, settings) {
      Drupal.behaviors.cst.attach.modals = function () {
        // Force external links on CST Issue description to open in a new tab.
        $(".cst-issue__description a")
          .not('a[href*="http://www.cfr.org"]')
          .attr("target", "_blank");

        $(".view-cst-timeline")
          .off("click")
          .on("click", ".view-content .views-field-title a", function (e) {
            e.preventDefault();
            var $this = $(this);
            var src = $this.attr("href");

            $.fancybox.open({
              baseClass: "cst-issue-fancybox-container",
              type: "iframe",
              src: src,
              iframe: {
                css: {
                  margin: 0,
                  width: "100%",
                },
              },
              toolbar: false,
              afterLoad: function (instance) {
                $(".fancybox-iframe")
                  .contents()
                  .find("body")
                  .addClass("cst-issue-embed");
                if (
                  !$(".fancybox-iframe")
                    .contents()
                    .find("body")
                    .hasClass("wf-lemondejournal-n4-active")
                ) {
                  setTimeout(function () {
                    instance.update();
                  }, 100);
                }
              },
            });
          });
      };

      Drupal.behaviors.cst.attach.handleModals = function () {
        $(".cst-issue__close-link").on("click", function (e) {
          e.preventDefault();
          parent.jQuery.fancybox.close();
        });
      };

      Drupal.behaviors.cst.attach.dropdowns = function () {
        $(".view-cst-timeline .form-select").each(function () {
          var $this = $(this);
          var label = $this.parents(".form-item").find("label").text();
          var selectWrapper = $this.parents(".select-wrapper");

          $this.select2({
            dropdownAutoWidth: true,
            minimumResultsForSearch: Infinity,
            dropdownParent: selectWrapper,
          });

          if ($this.val() === "All") {
            $this
              .parents(".form-item")
              .find(".select2-selection__rendered")
              .attr("title", label)
              .html(label);
          }
        });
      };

      // Drupal.behaviors.cst.attach.handleDropdowns = function () {
      //   $(".view-cst-timeline .form-select").on("change", function () {
      //     var $this = $(this);
      //     var label = $this.parents(".form-item").find("label").text();

      //     if ($this.val() === "All") {
      //       $this
      //         .parents(".form-item")
      //         .find(".select2-selection__rendered")
      //         .attr("title", label)
      //         .html(label);
      //     }

      //     if (
      //       $this.attr("name") === "field_suspected_state_sponsor_target_id"
      //     ) {
      //       switch ($this.val()) {
      //         case "Unknown":
      //           $this.val("Any");
      //           $(
      //             'select[name="field_suspected_state_sponsor_target_id_1"]',
      //           ).val("1");
      //           break;
      //         default:
      //           $(
      //             'select[name="field_suspected_state_sponsor_target_id_1"]',
      //           ).val("All");
      //           break;
      //       }
      //     }

      //     $("body").removeClass("filters--open");
      //     $(".view-filters").removeClass("view-filters--open");

      //     $this.parents("form").find(".form-submit").trigger("click");
      //   });

      //   Drupal.behaviors.cst.attach.renderFilters();
      // };

      // Drupal.behaviors.cst.attach.renderFilters = function () {
      //   var dropdowns = {};

      //   $(".view-cst-timeline .form-select")
      //     .not('select[name="field_suspected_state_sponsor_target_id_1"]')
      //     .each(function () {
      //       var $this = $(this);

      //       if ($this.val() !== "All") {
      //         dropdowns[$this.attr("name")] = {
      //           id: $this.attr("id"),
      //           key: $this.find("option:selected").text(),
      //         };
      //       }

      //       if (
      //         $this.attr("name") === "field_suspected_state_sponsor_target_id"
      //       ) {
      //         if (
      //           $(
      //             'select[name="field_suspected_state_sponsor_target_id_1"]',
      //           ).val() === "1"
      //         ) {
      //           var el = $(
      //             'select[name="field_suspected_state_sponsor_target_id"]',
      //           );
      //           el.parents(".form-item")
      //             .find(".select2-selection__rendered")
      //             .attr("title", "Unknown")
      //             .html("Unknown");

      //           dropdowns.field_suspected_state_sponsor_target_id = {
      //             id: el.attr("id"),
      //             key: "Unknown",
      //           };
      //         }
      //       }
      //     });

      //   if (JSON.stringify(dropdowns) !== "{}") {
      //     var filtersRendered = CFR.Utils.getTemplate(
      //       "#selected-filters-template",
      //       { dropdowns: dropdowns },
      //     );
      //     if (
      //       $(".view-cst-timeline .view-filters .view-filters__selected")
      //         .length === 0
      //     ) {
      //       $(".view-cst-timeline .view-filters").append(filtersRendered);
      //     } else {
      //       $(
      //         ".view-cst-timeline .view-filters .view-filters__selected",
      //       ).replaceWith(filtersRendered);
      //     }
      //   }
      // };

      Drupal.behaviors.cst.attach.handleFilters = function () {
        $(".view-filters__selected-link").on("click", function (e) {
          e.preventDefault();
          var $this = $(this);
          $(this).text("Loading...");
          var el = $("#" + $this.attr("data-target"));
          el.val("All").trigger("change");
        });
      };

      Drupal.behaviors.cst.attach.filtersToggle = function () {
        $(".view-cst-timeline .view-filters__toggle-link").on(
          "click",
          function (e) {
            var $this = $(this);
            $("body").addClass("filters--open");
            $this.parents(".view-filters").addClass("view-filters--open");
            e.preventDefault();
          },
        );
      };

      Drupal.behaviors.cst.attach.collapse = function () {
        $(once('click', ".collapse-control-link", context)).on('click', function (e) {
          e.preventDefault();
          var $this = $(this);

          if ($this.attr("data-expanded") === "true") {
            $this.attr("data-expanded", "false").html("View All");
            $this
              .parents(".col-sm-9")
              .find(".collapse-wrapper")
              .slideUp("fast");
          } else {
            $this.attr("data-expanded", "true").html("View Less");
            $this
              .parents(".col-sm-9")
              .find(".collapse-wrapper")
              .slideDown("fast");
          }
        });
        $("body", context).on("click", ".paragraph-collapse-link", function () {
          $(this).parent().toggleClass("paragraph-expanded");
        });
      };

      Drupal.behaviors.cst.attach.report = function () {
        var formItem = $(".form-item", context);
        var currentForm = null;

        formItem.on("focus", "input, select, textarea", function (e) {
          $(this).closest(".form-item").find("label").addClass("active");
        });

        formItem.on("blur", "input, select, textarea", function (e) {
          if (!$(this).val()) {
            $(this).closest(".form-item").find("label").removeClass("active");
          }
        });

        $(".form-item input, .form-item select, .form-item textarea").each(
          function (index) {
            if ($(this).val()) {
              $(this).closest(".form-item").find("label").addClass("active");
            }
          },
        );
        if (window.location.href.indexOf("report-an-incident") > -1) {
          $(".interactive-article-1").addClass("report-an-incident");
          $("#block-webform").addClass("container");
        }
      };

      Drupal.behaviors.cst.attach.search = function () {
        $("#search-block-form").on("submit", function (e) {
          if ($("#edit-keys").val().length <= 2) {
            e.preventDefault();
            $("#search-block-form input")
              .tooltip({
                title: "test",
                placement: "bottom",
                animation: true,
                container: "#block-cfr-interactives-search",
              })
              .tooltip("show");
          }
        });
      };

      Drupal.behaviors.cst.attach.mobileacordian = function () {
        $("h4").click(function () {
          $("h4").removeClass("active");
          $(this).addClass("active");
          $(".collapse").removeClass("in");
        });
      };

      Drupal.behaviors.cst.attach.navClick = function () {
        $(".main-nav__menu-hotspot").click(function () {
          $(".navbar-header").toggleClass("main-nav--menu-open");
          $(".navbar").toggleClass("nav-collaspe-height");
          $("body").toggleClass("nav-no-scroll");
          $(".main-nav-overlay").toggleClass("open");
        });
      };

      Drupal.behaviors.cst.attach.navItemClick = function () {
        $(".mobile-menu .navigation-bar .navigation-item").click(function () {
          $(".navbar-header").toggleClass("main-nav--menu-open");
          $(".navbar").toggleClass("nav-collaspe-height");
          $("body").toggleClass("nav-no-scroll");
          $(".main-nav-overlay").toggleClass("open");
        });
      };

      Drupal.behaviors.cst.attach.navScroll = function () {
        var position = $(window).scrollTop();
        $(window).on("scroll", function () {
          var scroll = $(window).scrollTop();

          if ($("#cst-navbar").length) {
            if (scroll < 300) {
              $(".navbar").removeClass("scroll-stick-nav");
            } else {
              $(".navbar").addClass("scroll-stick-nav");
            }

            position = scroll;
          } else {
            //if its other internal pages
            if (scroll > 0) {
              $(".navbar").addClass("scroll-stick-nav");
            } else {
              $(".navbar").removeClass("scroll-stick-nav");
            }
          }
        });
      };

      Drupal.behaviors.cst.attach.navStates = function () {
        $(".navigation-bar .navigation-item a").click(function (e) {
          $(".navigation-bar .navigation-item a").each(function () {
            $(this).removeClass("active");
          });
          $(this).addClass("active");
        });
      };

      Drupal.behaviors.cst.attach.reverseScroll = function () {
        let lastScrollTop = 0;
        let isBodyClassSet = false;
        $(window).on("scroll", function () {
          let st = $(this).scrollTop();
          let direction = st - lastScrollTop;
          if (direction < 0 && !isBodyClassSet) {
            $("body").addClass("reverse-scroll");
            isBodyClassSet = true;
          } else if (direction > 0 && isBodyClassSet) {
            $("body").removeClass("reverse-scroll");
            isBodyClassSet = false;
          }

          lastScrollTop = st;
        });
      };

      Drupal.behaviors.cst.attach.init = function () {
        Drupal.behaviors.cst.attach.modals();
        Drupal.behaviors.cst.attach.handleModals();
        Drupal.behaviors.cst.attach.dropdowns();
        Drupal.behaviors.cst.attach.handleDropdowns();
        Drupal.behaviors.cst.attach.handleFilters();
        Drupal.behaviors.cst.attach.filtersToggle();
        Drupal.behaviors.cst.attach.collapse();
        Drupal.behaviors.cst.attach.report();
        Drupal.behaviors.cst.attach.search();
        // Drupal.behaviors.cst.attach.mobileacordian();
        Drupal.behaviors.cst.attach.navClick();
        Drupal.behaviors.cst.attach.navItemClick();
        Drupal.behaviors.cst.attach.navScroll();
        Drupal.behaviors.cst.attach.navStates();
        Drupal.behaviors.cst.attach.reverseScroll();
      };

      Drupal.behaviors.cst.attach.init();
    },
  };
})(jQuery, Drupal);
