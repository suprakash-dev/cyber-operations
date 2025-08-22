window.Drupal = { behaviors: {}, locale: {} };

(function (Drupal, drupalSettings) {


  Drupal.attachBehaviors = function (context, settings) {
    context = context || document;
    settings = settings || drupalSettings;
    const behaviors = Drupal.behaviors;
    Object.keys(behaviors || {}).forEach((i) => {
      if (typeof behaviors[i].attach === 'function') {
        try {
          behaviors[i].attach(context, settings);
        } catch (e) {
          
        }
      }
    });
  };
})(Drupal, window.drupalSettings);
