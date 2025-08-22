(function ($) {
   'use strict';

  /**
   * Setup and attach the CFR component.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.videoPlayer = {
    attach: function (context, settings) {
///////////////////////// CONTENT BELLOW WAS ADDED BY AUTO GENERATED GULP TASK //////////////////////\



 'use strict';

var context = context || document;
var breakpoints = void 0;

function init() {
  breakpoints = CFR.Breakpoints;

  bindVideoPlayers(context);
  videoEmbed(context);
}

function bindVideoPlayers(context) {
  $('.video-player', context).each(function () {
    var container = $(this);
    var videoElem = container.find('.video-js')[0];
    var videoPlayer = videojs(videoElem); // eslint-disable-line
    var parentName = $(this).data('parent');
    var parentObj = $(this).parents('.' + parentName);
    var localContext = context;

    if (localContext === document) {
      localContext = $('article.cfr-transported-content')[0];
    }

    if (videoPlayer) {

      // Pauses video player when the current context changes
      $(document).on('cfr-transported-content--current', function (event, currentContext) {
        // The cfr-transported-content--current is dispatched every time we scroll the article into video, so we are verifying that context has actually changed based on the current context;
        if (localContext !== currentContext) {
          videoPlayer.pause();
        }
      });

      /*videoPlayer.on('ready', function () {
        var _cbv = window._cbv || (window._cbv = []); // eslint-disable-line
        _cbv.push(videoPlayer.tech_.player_.ytPlayer); // eslint-disable-line
      });*/

      videoPlayer.on('pause', function () {
        container.addClass('video-player--paused');
        container.removeClass('video-player--playing');

        if (parentObj) {
          parentObj.removeClass(parentName + '--video-playing');
          parentObj.addClass(parentName + '--video-paused');

          // TODO Refactor so video button is part of the video player component
          parentObj.find('.video-btn').removeClass('video-btn--playing');
        }

        container.find('.video-btn').removeClass('video-btn--playing');
      });

      videoPlayer.on('play', function () {
        container.removeClass('video-player--paused');
        container.addClass('video-player--playing video-player--used');
        if (parentObj) {
          parentObj.addClass(parentName + '--video-playing ' + parentName + '--video-used');
          parentObj.removeClass(parentName + '--video-paused');

          // TODO Refactor so video button is part of the video player component
          parentObj.find('.video-btn').addClass('video-btn--playing');
        }

        container.find('.video-btn').addClass('video-btn--playing');
      });

      videoPlayer.on('useractive', function () {
        container.addClass('video-player--user-active');
        container.removeClass('video-player--user-inactive');
        if (parentObj) {
          parentObj.removeClass(parentName + '--video-user-inactive');
          parentObj.addClass(parentName + '--video-user-active');

          // TODO Refactor so video button is part of the video player component
          parentObj.find('.video-btn').addClass('video-btn--user-active');
        }

        container.find('.video-btn').addClass('video-btn--user-active');
      });

      videoPlayer.on('userinactive', function () {
        container.addClass('video-player--user-inactive');
        container.removeClass('video-player--user-active');
        if (parentObj) {
          parentObj.removeClass(parentName + '--video-user-active');
          parentObj.addClass(parentName + '--video-user-inactive');

          // TODO Refactor so video button is part of the video player component
          parentObj.find('.video-btn').removeClass('video-btn--user-active');
        }
        container.find('.video-btn').removeClass('video-btn--user-active');
      });

      // [DM] TODO Refactor so ended and paused function are shared
      videoPlayer.on('ended', function () {
        container.addClass('video-player--paused');
        container.removeClass('video-player--playing');
        if (parentObj) {
          parentObj.removeClass(parentName + '--video-playing');
          parentObj.addClass(parentName + '--video-paused');

          // TODO Refactor so video button is part of the video player component
          parentObj.find('.video-btn').removeClass('video-btn--playing');
        }

        container.find('.video-btn').removeClass('video-btn--playing');
      });
    }
  });
}

function videoEmbed() {

  $('.video-embed__embed-iframe-btn-container', context).each(function (index, container) {
    var $embedUrlSpan = $(container).find('.video-embed__url');
    var url = $embedUrlSpan.val();

    if (/youtube\.com/.test(url) && !breakpoints.isMobile()) {
      $(this).show();
    } else {
      return false;
    }

    $(this).find('.video-embed__embed-iframe-btn').qtip({
      content: {
        text: function text() {
          setTimeout(function () {
            return $embedUrlSpan.select();
          }, 0);
          return $embedUrlSpan;
        }
      },
      position: {
        my: 'top center',
        at: 'bottom center',
        viewport: $(window),
        adjust: {
          method: 'shift flipinvert'
        }
      },
      style: {
        def: false,
        tip: {
          width: 30,
          height: 15,
          corner: true
        }
      },
      show: {
        event: 'click',
        solo: true
      },
      hide: {
        event: 'unfocus',
        delay: 500
      }
    });
  });
}
//# sourceMappingURL=video-player.js.map
if(typeof init == "function") { init(); }


///////////////////////// CONTENT ABOVE WAS ADDED BY AUTO GENERATED GULP TASK //////////////////////
    }
  };
 })(jQuery);
