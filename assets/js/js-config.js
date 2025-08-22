(function ($, drupalSettings) {
  
  var Config = {
    FACEBOOK_APP_ID : '1202896923085736',
    FACEBOOK_DEFAULT_CAPTION : 'CFR.org | Council on Foreign Relations',
    TWITTER_USERNAME : 'CFR_org'
  };

  if (drupalSettings.bitly) {
    Config.BITLY_BEARER_TOKEN = drupalSettings.bitly.bearer_token;
    Config.BITLY_GROUP_GUID = drupalSettings.bitly.group_guid;
  }

  window.CFR = window.CFR || {};
  window.CFR.Config = Config;

})(jQuery, drupalSettings);

