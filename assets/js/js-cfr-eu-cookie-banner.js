(function($, Drupal, drupalSettings, cookies) {
    'use strict';
    var cookieName = (typeof drupalSettings.eu_cookie_compliance.cookie_name === 'undefined' || drupalSettings.eu_cookie_compliance.cookie_name === '') ? 'cookie-agreed' : drupalSettings.eu_cookie_compliance.cookie_name;
    if(isNaN(cookies.get(cookieName)))
    {
        setTimeout(popupSlide, 8000);
    }
    
    function popupSlide() {
        let popup = $('#sliding-popup.sliding-popup-bottom');
        if (!popup.length) {
            return;
        }
        popup.animate({bottom: 0}, drupalSettings.eu_cookie_compliance.popup_delay, null, function () {
            popup.trigger('eu_cookie_compliance_popup_open');
            $('body').addClass('eu-cookie-compliance-popup-open');
        });
    }
}

(jQuery, Drupal, drupalSettings, window.Cookies));
