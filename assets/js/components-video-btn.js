(function ($) {
   'use strict';
 
  /**
   * Setup and attach the CFR component.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.videoBtn = {
    attach: function (context, settings) {
///////////////////////// CONTENT BELLOW WAS ADDED BY AUTO GENERATED GULP TASK //////////////////////\

 
 
 'use strict';

var context = context || document;

function init() {
  $('.video-btn', context).click(function () {
    var parentName = '' + $(this).data('parent');
    var videoParent = $(this).parents('.' + parentName);
    var videoElem = videoParent.find('.video-js')[0];
    var videoPlayer = videojs(videoElem); // eslint-disable-line

    if (videoPlayer) {
      if (videoParent.hasClass(parentName + '--video-playing')) {
        videoPlayer.pause(); // eslint-disable-line
      } else {
        videoPlayer.play(); // eslint-disable-line
      }
    }
  });
}
//# sourceMappingURL=video-btn.js.map
if(typeof init == "function") { init(); }
 
 
///////////////////////// CONTENT ABOVE WAS ADDED BY AUTO GENERATED GULP TASK //////////////////////
    }
  };
 })(jQuery);
