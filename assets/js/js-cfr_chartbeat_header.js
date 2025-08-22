<!-- ChartBeat Analytics -->
var _sf_async_config = _sf_async_config || {};
/** CONFIGURATION START **/
_sf_async_config.uid = 61524; // ACCOUNT NUMBER
_sf_async_config.domain = 'cfr.org'; // DOMAIN
_sf_async_config.useCanonical = true;
/** CONFIGURATION END **/
var _sf_startpt = (new Date()).getTime();
// Set a timeout event for 1 second that will remove the body hiding
// tag from the document if it has not already been removed. This
// gives the Headline Tester script a total of 1 second to load and run to limit
// the potential for flicker of headlines.
// The one second time limit can be adjusted to client preferences.
window.setTimeout(function() {
    var hider = document.getElementById('chartbeat-flicker-control-style');
    if (hider)
    { hider.parentNode.removeChild(hider); }
}, 1000);
<!-- End ChartBeat Analytics -->