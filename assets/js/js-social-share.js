/**
 * @file
 * Share Kit file for Interactives.
 */

(function ($) {
  function shareMetadataFor(self, url = '', options = {}) {
    let $shareKit;

    if ($(self).parents('.main-nav').length === 1) {
      if ($('.cfr-transported-content--current').find('.article-header .share-kit').length >= 1) {
        $shareKit = $('.cfr-transported-content--current').find('.article-header .share-kit');
      }
      else {
        $shareKit = $('.article-header .share-kit');
      }
    }
    else {
      $shareKit = $(self).parents('.share-kit');
    }

    let location = url ? url : getIframeLocation();
    let notIframe = _.isEmpty(location);

    if (notIframe) {
      location = $('meta[property="og:url"]').attr('content')
        || window.location.protocol + "//" + window.location.hostname + window.location.pathname;
    }

    if ($shareKit.data('share-anchor') && notIframe) {
      location = location + '#' + $shareKit.data('share-anchor');
    }

    if ($shareKit.data('share-query') && notIframe) {
      location = location + '?' + $shareKit.data('share-query');
    }

    let location_encoded = encodeURIComponent(location);

    let name = $('meta[property="og:site_name"]').attr('content');
    let caption = $('meta[property="og:title"]').attr('content');
    let description = $shareKit.data('share-description');
    if (!description) {
      description = $shareKit.find('[data-share-description]').data('share-description')
        || $('meta[property="og:description"]').attr('content')
        || document.title;
    }
    let picture = $('meta[property="og:image"]').attr('content');
    let shareType = $shareKit.data('share-type');

    if (caption === '') {
      caption = CFR.Config.FACEBOOK_DEFAULT_CAPTION;
    }

    if (description === '::PageTitle::') {
      description = $('h1').text();
    }

    return {
      location: location,
      location_encoded: location_encoded,
      name: name,
      description: description,
      caption: caption,
      picture: picture,
      shareType: shareType
    };
  }

  function shareWindowOpen(media, metadata, options = {}) {
    let obj = {};

    obj.name = media.replace(/\b\w/g, function (l) {
      return l.toUpperCase()
    });

    // [DM]NOTE: Popup blockers will typically only allow window.open
    // if used during the processing of a user event (like a click).
    // In our case, we're calling window.open later, not during the event,
    // because twitter is using CFR.Utils.getShortenedURL which uses $.getJSON
    // The Fix is to open the window as soon as click happens,
    // and re-direct the pop-up to the proper URL.
    let shareUrl = window.location.protocol + '//' + window.location.hostname
      + '/interactive/themes/custom/cfr_interactives/assets/loading-page.html';
    let shareWindow = window.open(shareUrl, obj.name, shareWindowSpecs());

    switch (media) {
      case 'facebook':
        obj.url = 'https://www.facebook.com/share.php?u=' + metadata.location_encoded + '&utm_medium=social_share&utm_source=fb&utm_campaign=cyber-tracker';
        shareWindow.location.href = obj.url;
      break;

      case 'twitter':
        CFR.Utils.getShortenedURL(metadata.location, function (shortURL) {
          let tweetParameters = {
            text: metadata.description,
            url: shortURL,
            via: CFR.Config.TWITTER_USERNAME
          };

          // Increase total tweet length to 280. Reserve 25 for shortened url.
          const MAX_TWEET_LENGTH = 280;
          const URL_SHORT_LENGTH = 25;
          const TWEET_DESC_LENGTH = MAX_TWEET_LENGTH - URL_SHORT_LENGTH;
          if (metadata.description.length > TWEET_DESC_LENGTH) {
            metadata.description = metadata.description.slice(0, TWEET_DESC_LENGTH) + '…';
          }

          if (metadata.shareType !== 'article') {
            if ('share_description' in options) {
              tweetParameters.text = $('meta[name="twitter:description"]').attr('content') || metadata.caption;
            }
            else {
              tweetParameters.text = $('meta[name="twitter:title"]').attr('content') || metadata.caption;
            }
          }

          // Get an array from tweetParameters object to check the length.
          let tweetParametersArray = $.map(tweetParameters, function (value, key) {
            return value;
          });
          tweetParametersArray[2] = 'via @' + tweetParametersArray[2];
          let tweet = tweetParametersArray.join(' ');

          // If the tweet is too large, cut the description.
          if (tweet.length > MAX_TWEET_LENGTH) {
            let indexStart = 0;
            let tweetParametersTemp = tweetParametersArray.slice(0);
            tweetParametersTemp = tweetParametersTemp.splice(1, 2);
            let indexEnd = MAX_TWEET_LENGTH - tweetParametersTemp.join(' ').length - 1 - 3;
            tweetParameters.text = tweetParametersArray[0].substring(indexStart, indexEnd) + '...';
          }

          obj.url = 'http://twitter.com/share?' + $.param(tweetParameters) + '&utm_medium=social_share&utm_source=tw&utm_campaign=cyber-tracker';
          shareWindow.location.href = obj.url;
        });
      break;

      case 'linkedin':
        obj.url = 'https://www.linkedin.com/shareArticle?mini=true&url=' + metadata.location_encoded + '&title='
          + encodeURIComponent(metadata.name) + '&summary=' + encodeURIComponent(metadata.description) + '&source=CFR';
        shareWindow.location.href = obj.url;
      break;

      case 'email':
        obj.url = opt.location;
        shareWindow.location.href = obj.url;
      break;

      case 'tumblr':
        obj.url = 'http://www.tumblr.com/share/link?url=' + metadata.location_encoded;
        shareWindow.location.href = obj.url;
      break;
    }

  }

  function getIframeLocation() {
    let isInIframe = (parent !== window);
    let parentUrl = null;

    if (isInIframe) {
      let anchor = CFR.Utils.getParameterByName('anchor');
      parentUrl = parent.location.protocol + '//' + parent.location.hostname + parent.location.pathname + '#' + anchor + '?modal=true';
    }

    return parentUrl;
  }

  function shareWindowSpecs() {
    return 'height=400, width=540, top=' + ((window.innerHeight - 400) / 2) + ', left=' + ((window.innerWidth - 540) / 2) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0';
  }

  function shareViafacebook(self, url = '', options = {}) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'facebook_share' });

    let metadata = shareMetadataFor(self, url, options);
    if (metadata.shareType === 'pullquote') {
      metadata.name = $('.article-header .share-kit').data('share-name');
    }

    FB.ui({
      method: 'feed',
      link: metadata.location,
      picture: metadata.picture,
      name: metadata.name,
      description: metadata.description,
      caption: metadata.caption
    }, function (response) {
    });
  }

  function shareViaTwitter(self, url = '', options = {}) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'twitter_share' });
    let metadata = shareMetadataFor(self, url, options);
    shareWindowOpen('twitter', metadata, options);
  }

  function shareViaLinkedin(self, url = '', options = {}) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'linkedin_share' });
    let metadata = shareMetadataFor(self, url, options);
    shareWindowOpen('linkedin', metadata, options);
  }

  function shareViaEmail(self, url = '', options = {}) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'email_share' });
    let metadata = shareMetadataFor(self, url, options);
    let subject = metadata.name || $('head title').text();
    let body = [];

    if (metadata.description) {
      body.push(metadata.description);
    }

    if (metadata.location) {
      body.push(metadata.location);
    }

    body = body.join('\n');
    window.location.href = 'mailto:?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
  }

  function shareViaPrint() {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'print_option' });
    window.print();
  }

  function shareViaCite(self) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'cite_button' });
    let $ebContainer = $('#EBwidget_container');
    let $ebCitation = $ebContainer.find('#EBwidget_citation');
    let $self = $(self);
    let xPos = $self.offset().left;
    let yPos = $self.offset().top + $self.height() - 20;

    EBcitation = {
      "page": document.title,
      "url": document.URL,
      "site": "Council on Foreign Relations"
    };

    let $body = $('body');
    if ((xPos + 250) > $body.width()) {
      xPos = $body.width() - 250;
    }

    if ($self.parents('.main-nav').length > 0) {
      yPos += 10;
    }

    let $shareCiteOpen = $('.share-kit__cite--open');
    // If cite button is open and EB citation is open, close the EB citation.
    if ($self.hasClass('share-kit__cite--open') && $ebCitation.is(':visible')) {
      $shareCiteOpen.removeClass('share-kit__cite--open');
      $ebContainer.find('#EBwidget_close')[0].click();
      return;
    }

    // If cite button is closed and EB citation is open, move the citation to
    // this button and mark others as closed.
    if (!$self.hasClass('share-kit__cite--open') && $ebCitation.is(':visible')) {
      $shareCiteOpen.removeClass('share-kit__cite--open');
      $self.addClass('share-kit__cite--open');
      $ebContainer.css({top: yPos + 'px', left: xPos + 'px'});
      return;
    }

    // If cite open is closed and EB citation is closed, open the EB citation.
    if ($self.hasClass('share-kit__cite--open') && !$ebCitation.is(':visible')) {
      $ebContainer.css({top: yPos + 'px', left: xPos + 'px'}).find('#EBwidget_button')[0].click();
      console.log('Cite button was open, open the citation');
      return;
    }

    // If EB citation is on a neutral unused state open citation and mark
    // both it and the trigger button as open.
    $shareCiteOpen.removeClass('share-kit__cite--open');
    $self.addClass('share-kit__cite--open');
    $ebContainer.css({top: yPos + 'px', left: xPos + 'px'}).find('#EBwidget_button')[0].click();
  }

  let Share = {
    facebook: shareViafacebook,
    twitter: shareViaTwitter,
    linkedin: shareViaLinkedin,
    email: shareViaEmail,
    print: shareViaPrint,
    pdf: shareViaCite
  };

  window.CFR = window.CFR || {};
  window.CFR.Share = Share;

})(jQuery);

// ------ Initialize Facebook App SDK.
window.fbAsyncInit = function () {
  FB.init({
    appId: CFR.Config.FACEBOOK_APP_ID,
    xfbml: true,
    version: 'v2.7'
  });
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
