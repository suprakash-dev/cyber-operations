(function ($) {

  // Variable Definitions
  var devices = {
    mobile: 320,
    tablet: 750,
    smallDesktop: 1024,
    largeDesktop: 1280,
    current: '',
    array: ['mobile', 'tablet', 'smallDesktop', 'largeDesktop'],
    state: []
  };


  // ---- Attach common methods to window object

  function is(device) {
    if(devices.state.indexOf(device) > -1) {
      return true;
    }

    switch (device) {
      case 'mobile':
        return isMobile();
      break;
      case 'tablet':
        return isTablet();
      break;
      case 'smallDesktop':
        return isSmallDesktop();
      break;
      case 'largeDesktop':
        return isLargeDesktop();
      break;
      default:
        return false
    }
  }

  // Utils
  function isMobile() {
    var widthWindow = window.innerWidth;
    return widthWindow < devices['tablet'];
  }

  function isTablet() {
    var widthWindow = window.innerWidth;
    return widthWindow >= devices['tablet'] && widthWindow < devices['smallDesktop'];
  }

  function isSmallDesktop() {
    var widthWindow = window.innerWidth;
    return widthWindow >= devices['smallDesktop'] && widthWindow < devices['largeDesktop'];
  }

  function isLargeDesktop() {
    var widthWindow = window.innerWidth;
    return widthWindow >= devices['largeDesktop'];
  }

  function updateBreakpoints() {
    var windowW = window.innerWidth;
    if (windowW < devices.tablet && devices.current !== devices.array[0]) {
      eventsForIndex(0);
      return devices.current = devices.array[0];
    }
    else if(windowW >= devices.tablet && windowW < devices.smallDesktop && devices.current !== devices.array[1]) {
      eventsForIndex(1);
      return devices.current = devices.array[1];
    }
    else if(windowW >= devices.smallDesktop && windowW < devices.largeDesktop && devices.current !== devices.array[2]) {
      eventsForIndex(2);
      return devices.current = devices.array[2];
    }
    else if( windowW >= devices.largeDesktop && devices.current !== devices.array[3]) {
      eventsForIndex(3);
      return devices.current = devices.array[3];
    }
    else{
      return 'same';
    }
  }

  function eventsForIndex(bI) {
    $(document).trigger('breakpoints_change');

    devices.state = [];
    devices.state.push(`enter_${devices.array[bI]}`);
    $(document).trigger(`enter_${devices.array[bI]}`);

    for(var lI = devices.array.length-1; lI > bI; lI--) {
      devices.state.push(`lessThan_${devices.array[lI]}`);
      $(document).trigger(`lessThan_${devices.array[lI]}`);
    }

    for(var wI = 0; wI <= bI; wI++) {
      devices.state.push(`widerThan_${devices.array[wI]}`);
      $(document).trigger(`widerThan_${devices.array[wI]}`);
    }
  }

  //---- Initial breakpoints
  updateBreakpoints();

  //---- Update values on resize
  $(window).resize(function() {
    updateBreakpoints();
  });


  // COMMON Exposed methods
  var Breakpoints = {
    devices: devices,
    update: updateBreakpoints,
    isMobile: isMobile,
    isTablet: isTablet,
    isSmallDesktop: isSmallDesktop,
    isLargeDesktop: isLargeDesktop,
    is: is
  };

  window.CFR = window.CFR || {}
  window.CFR.Breakpoints = Breakpoints;

})(jQuery);
