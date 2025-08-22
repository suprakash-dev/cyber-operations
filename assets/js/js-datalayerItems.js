(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.datalayerItems = {

    resolveEventLabelFromCode: function (labelCode, element) {
      switch (labelCode) {
        case 1:
          // [click text] - [click url]
          return $(element).text().trim() + " - " + $(element).attr("href");

        case 2:
        case 7:
          // [referralPath] or [page url]
          return location.href;

        case 4:
          // [page]
          return document.title;

        case 5:
          // [timestamp]
          return new Date().getTime();

        case 6:
          // [click text]
          return $(element).text().trim();

        default:
          return "";
      }
    },
    attach: function (context, settings) {

      /*!
       * Render datalayer items.
       */
      var datalayerRender = function (item) {
        if (item.type == "open_text") {
          eval(item.value);
        }
        else if (item.type == "Dynamic") {
          let pushDynamic = item;
          populateDynamic(item);
          let itemLabel = item.dynamicLabel;

          switch (item.triggerElementType) {
            case 'source':
              $(item.elementWithClassID)[item.eventHandlerType]('Ajax', function () {
                pushDynamic['source'] = item.eventLabel;
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'target':
              $(item.elementWithClassID)[item.eventHandlerType]('Ajax', function () {
                pushDynamic['target'] = item.eventLabel;
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'click':
              $(item.elementWithClassID)[item.eventHandlerType](item.triggerElementType, function () {
                pushDynamic['click'] = item.eventLabel;
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'ajax':
              $(document.body).on(item.eventHandlerType, item.elementWithClassID, function () {
                pushDynamic['itemLabel'] = item.eventLabel;

                pushDynamicContents(pushDynamic);
              });
              break;

            case 'on_click':
            case 'on_hover':
              $(item.elementWithClassID)[item.eventHandlerType](function () {
                pushDynamic['itemLabel'] = item.eventLabel;
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'content_text_copied':
              document.addEventListener('copy', function (e) {
                pushDynamic[content_text_copied] = 1;
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'content_text_copied_count':
              function getSelectionText() {
                let text = '';
                if (window.getSelection) {
                  text = window.getSelection().toString();
                } else if (document.selection && document.selection.type != 'Control') {
                  text = document.selection.createRange().text;
                }
                return text.length;
              }

              document.addEventListener('copy', function (e) {
                pushDynamic[content_text_copied_count] = getSelectionText();
                pushDynamicContents(pushDynamic);
              });
              break;

            case 'content_recirculation':
              let contentTypeToCheck = ["article"];
              let contentType = document.referrer.replace(/^[^:]+:\/\/[^/]+\//, '').replace(/\/.*/, '');
              if (contentTypeToCheck.includes(contentType)) {
                pushDynamic[itemLabel] = document.referrer;
              }
              break;

            case 'infinite_scroll':
              $(document).ready(function () {
                let scroll_name_array = [];
                $(window).scroll(function () {
                  let dhT = $(item.elementWithClassID).offset().top,
                    dhH = $(item.elementWithClassID).outerHeight(),
                    dwH = $(window).height(),
                    dwS = $(this).scrollTop();
                  if (!scroll_name_array.includes('scroll')) {
                    scroll_name_array.push('scroll');
                    if (dwS > (dhT + dhH - dwH)) {

                      pushDynamic[itemLabel] = item.event;
                      pushDynamicContents(pushDynamic);
                    }
                  }
                });
              });
              break;
          }
          if (typeof item.podcast_start !== 'undefined' || typeof item.podcast_finish !== 'undefined') {
            if (($('audio').length) > 0) {
              let video_name_array = [];
              if (typeof item.podcast_start !== 'undefined') {
                $('audio').get(0).addEventListener('playing', function () {

                  if (!video_name_array.includes('podcast')) {
                    video_name_array.push('podcast');
                    pushDynamic.podcast_start = 1;
                    pushDynamicContents(pushDynamic);
                  }
                });

              }
              if (typeof item.podcast_finish !== 'undefined') {
                $('audio').get(0).addEventListener('ended', function () {

                  if (!video_name_array.includes('podcast')) {
                    video_name_array.push('podcast');
                    pushDynamic.podcast_finish = 1;
                    pushDynamicContents(pushDynamic);
                  }
                });
              }
            }
          }
          if (Object.keys(pushDynamic).length > 0) {
            pushDynamic.event = item.event;
            pushDynamic.nonInteraction = item.nonInteraction;
            pushDynamic.id = item.id;
            dataLayer.push({ pushDynamic });

          }

        }

        else {
          switch (item.triggerElementType) {
            case 'click':
              $(item.elementWithClassID)[item.eventHandlerType](item.triggerElementType, function () {
                datalayerPush(item, $(this));
              });
              break;

            case 'ajax':
              $(document.body).on(item.eventHandlerType, item.elementWithClassID, function () {
                datalayerPush(item, $(this));
              });
              break;

            case 'on_click':
            case 'on_hover':
              $(item.elementWithClassID)[item.eventHandlerType](function () {
                datalayerPush(item, $(this));
              });
              break;

            case 'content text copied':
              function getSelectionText() {
                let text = '';
                if (window.getSelection) {
                  text = window.getSelection().toString();
                } else if (document.selection && document.selection.type != 'Control') {
                  text = document.selection.createRange().text;
                }
                return text;
              }
              document.addEventListener('copy', function (e) {
                dataLayer.push({
                  'event': item.event,
                  'eventCategory': item.eventCategory,
                  'eventAction': item.eventAction,
                  'eventLabel': getSelectionText(),
                  'nonInteraction': item.nonInteraction,
                  'contentTextCopiedMetric': item.metric
                });
              });
              break;

            case 'scroll':
              $(document).ready(function () {
                let scroll_name_array = [];
                $(window).scroll(function () {
                  let hT = $(item.elementWithClassID).offset().top,
                    hH = $(item.elementWithClassID).outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                  if (!scroll_name_array.includes('scroll')) {
                    scroll_name_array.push('scroll');
                    if (wS > (hT + hH - wH)) {
                      datalayerPush(item, $(this));
                    }
                  }
                });
              });
              break;

            default:

          }
        }
      };
      let pushDynamicContents = function (item) {
        let itemToPush = { ...item };
        if (item.hasOwnProperty('elementWithClassID')) {
          itemToPush = getTargetDynamic(itemToPush, item.elementWithClassID);
        }
        itemToPush = getSourceDynamic(itemToPush);

        itemToPush['gtm.uniqueEventId'] = item.id;
        delete itemToPush['custom_values'];
        delete itemToPush['domSelectElement'];
        delete itemToPush['eventHandlerType'];
        delete itemToPush['type'];
        delete itemToPush['undefined'];
        delete itemToPush['label'];
        delete itemToPush['triggerElementType'];
        delete itemToPush['elementWithClassID'];
        delete itemToPush['id'];

        dataLayer.push(itemToPush);
      };
      let populateDynamic = function (item) {
        if (typeof item.custom_values !== 'undefined') {
          switch (true) {
            case item.custom_values.author:
              item.author = $(item.custom_values.author.elementWithClassID);
              break;

            case item.custom_values.cookie_consent:
              item.cookie_consent = $(item.custom_values.cookie_consent.elementWithClassID);
              break;

            default:
          }
        }
        if (typeof item.user_category !== 'undefined') {
          let current_user_roles = drupalSettings.customDimensionUserCategory[0].role;
          if (current_user_roles.indexOf("authenticated") > -1) {
            item.user_category = 'staff';
          } else {
            item.user_category = 'anonymous';
          }
        }
        if (typeof item.content_type !== undefined) {
          if (typeof drupalSettings.customDimensionContentType != 'undefined' && typeof drupalSettings.customDimensionContentType[0].contentType != 'undefined') {
            item.content_type = drupalSettings.customDimensionContentType[0].contentType;
          }
        }
        return item;
      }
      let getTargetDynamic = function (item, element) {
        if (item.hasOwnProperty('target')) {
          if (typeof item.custom_values.target !== 'undefined') {
            item.target = item.custom_values.target;
          } else {
            item.target = $(element).attr("href");
          }
          if (item.target == undefined) {
            item.target = '/';
          }
        }
        return item;
      }

      let getSourceDynamic = function (item) {
        if (item.hasOwnProperty('source')) {
          if (typeof item.custom_values.source !== 'undefined' && item.custom_values.source != null) {
            item.source = item.custom_values.source;
            item.source.replace(/\/$/, '');
          } else {
            item.source = window.location.href.replace(/\/$/, '');
          }
        }
        return item;
      }
      /*!
       * Push datalayer item.
       */
      let datalayerPush = function (item, obj) {
        let label = item.eventLabel;

        if (!item.labelCustom) {
          label = Drupal.behaviors.datalayerItems.resolveEventLabelFromCode(
            label, obj
          );
        }

        dataLayer.push({
          'event': item.event,
          'eventCategory': item.eventCategory,
          'eventAction': item.eventAction,
          'eventLabel': label,
          'nonInteraction': item.nonInteraction,
          'clickMetric': item.metric
        });
      };

      /*!
       * Render foreachFunction for aggregation.
       */
      var datalayerRenderAll = function (item) {
        datalayerRender(item);
      };

      /*!
       * Clean item value.
       */
      var htmlDecode = function (input) {
        var doc = new DOMParser().parseFromString(input, 'text/html');
        return doc.documentElement.textContent;
      };

      // Datalayer items render.
      $(document).ready(function () {
        let data = drupalSettings.dd_datalayer_tools.data_layers;
        // Check bypass flag.
        if (data[0].type == 'bypass') {
          dataLayer = window.dataLayer || [];
        }
        // Render Header Items
        if (data.Head !== undefined) {
          data.Head.forEach(datalayerRenderAll);
        }
        // Render Body Items
        if (data.Body !== undefined) {
          data.Body.forEach(datalayerRenderAll);
        }
        // Render Footer Items when entire page loaded.
        $(window).on('load', function () {
          if (data.Footer !== undefined) {
            data.Footer.forEach(datalayerRenderAll);
          }
        });
      });
      // END Datalayer items render.

      /*!
       * Render foreachFunction for aggregation.
       */
      var customDataRenderAll = function (item) {
        pushItems[item.key] = htmlDecode(item.value);
      };

      // Custom datalayer items render.
      let customData = drupalSettings.dd_datalayer_tools.custom_variables;
      if (customData) {
        dataLayer = window.dataLayer || [];
        // Clean Values.
        var pushItems = [];
        customData.forEach(customDataRenderAll);
        if (pushItems) {
          dataLayer.push(
            pushItems
          )
        }
      }
      // END Custom datalayer items render.

    }
  };
})(jQuery, Drupal, drupalSettings);
