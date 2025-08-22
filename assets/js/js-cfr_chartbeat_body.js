<!-- ChartBeat Analytics -->
/** Get metadata from dataLayer **/
var authors = dataLayer[0]['author'];
var regions = dataLayer[0]['region'];

var _sf_async_config = _sf_async_config || {};

/** CONFIGURATION START **/
if (typeof authors !== 'undefined') {
    _sf_async_config.authors = authors.join().trim();
}
if (typeof regions !== 'undefined') {
    _sf_async_config.sections = regions.join().trim();
}
/** CONFIGURATION END **/

(function() {
    function loadChartbeat() {
            window._sf_endpt = (new Date()).getTime();
            var e = document.createElement('script');
            e.setAttribute('language', 'javascript');
            e.setAttribute('type', 'text/javascript');
            e.setAttribute('src', '//static.chartbeat.com/js/chartbeat_video.js');
            document.body.appendChild(e);
        }
        /** TELL CHARTBEAT TO AUTODETECT YOUTUBE VIDEOS **/
    var oldonload = window.onload;
    window.onload = (typeof window.onload != 'function') ?
        loadChartbeat : function() {
            oldonload();
            loadChartbeat();
        };
})();
