'use strict';
(function ($, Drupal) {

  Drupal.behaviors.utils = {
    attach: function (context, settings) {

      // Force external links to open in a new tab.
      $('article.interactive-article-1 a').each(function(){
        if(this.hostname !== location.hostname) {
          $(this).attr('target', '_blank');
        }
      });

      $('.cfr-interactives a.use-fancybox').off('click').on('click', function(e) {
        e.preventDefault();
        $.fancybox.open({
          baseClass : 'cfr-interactives-fancybox-container',
          src: $(this).attr('href'),
          iframe : {
            css : {
              margin : '30px 15px',
              width : '90%'
            }
          },
          type: 'iframe',
          toolbar: false,
          afterLoad : function() {
            $('.fancybox-iframe').contents().find('html')
              .addClass('cfr-interactives__embed')
              .find('.cfr-interactives__close-link')
                .on('click', function(e){
                  e.preventDefault();
                  parent.jQuery.fancybox.close();
                });
          }
        });
      });

      // Indexed text paragraph
      $('.indexed-text .indexed-text__index-item').off('click').on('click', context, function(e) {
        e.preventDefault();
        var href = $(this).find('a').attr('href');
        $('html, body').animate({ scrollTop: $(href).offset().top });
      });

      // Navigation
      $(".navigation-bar .navigation-item a").each(function(e){
        var href = document.location.pathname + document.location.hash;
        var active = $(this).attr('href') == href;
        $(this).toggleClass('active', active);
      });

      $(window, context).scroll(function() {
        var topMenu = $('#sticky-wrapper');
        if (topMenu.length && topMenu.hasClass('is-sticky')) {
          var menuTop = topMenu.offset().top;
          var topMenuHeight = topMenu.height();
          var fromTop = $(this).scrollTop();
          var items = topMenu.find('.navigation-item a');
          items.each(function(i) {
            var key = $(this).attr('href').split('#')[1];
            if (key) {
              var item = $('#' + key);
              item.removeClass('active');
              var nearBottom = $(window).scrollTop() + $(window).height() > $(document).height() - topMenuHeight;
              var lastItem = (i + 1 == items.length);
              if (item && item.length) {
                var itemTop = item.offset().top - topMenuHeight;
                if (itemTop <= fromTop || nearBottom && lastItem) {
                  items.removeClass('active');
                  $(this).addClass('active');
                }
              }
            }
          });
        }
      });
    }
  };

  if (!$('body').hasClass('page-project-wpp')) {
    // Do not fetch common footer for WPP project.
    // WPP project has it's own footer & newsletter
    
    $.ajax({
      url: 'https://www.cfr.org/site-api/cfr-wrapper',
      dataType: 'html'
    })
    .then(function(a,b,c){
      $('footer > .container').html($(a).find('footer').html());
      $('.footer .form-submit').on('click', function(e) {
          e.preventDefault();
          window.open('https://www.cfr.org');
      });
      $('.footer .main-footer__logo-btn').attr('href', 'https://www.cfr.org');
      $('.main-footer__newsletter-signup-all a').text('Browse CFR newsletters')
      $('.footer .form-item')
        .on('focus', 'input', function(e) {
          window.open('https://www.cfr.org');
          $(this).closest('.form-item').find('label').addClass('active');
        })
        .on('blur', 'input', function(e) {
          if (!$(this).val()) {
            $(this).closest('.form-item').find('label').removeClass('active');
          }
        });
    });
  }

  $(function() {
    $(window).on('resize', function() {
      var footerHeight = $('footer.main-footer').outerHeight();

      if (!$('body').hasClass('page-project-wpe')) {
        footerHeight += 30;
      }

      var fh = $('body').width() >= 768 ? footerHeight : 0;
      $('body').css('padding-bottom', fh);
    }).trigger('resize');
  });

  window.CFR = window.CFR || {};
  window.CFR.Utils = window.CFR.Utils || {};

  CFR.Utils.getTemplate = function(templateId, data ){
    var template = '';
    var html = '';

    template = $( templateId ).html();
    template = Handlebars.compile( template );

    html = template( data );

    return html;
  };

  CFR.Utils.getParameterByName = function(name, url) {
      if (!url) {
          url = window.location.href;
      }
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
  };

  CFR.Utils.getShortenedURL = function(url, callback) {
    $.ajax({
      type: 'POST',
      url: 'https://api-ssl.bitly.com/v4/shorten',
      cache: 'true',
      data: JSON.stringify({long_url: url}),
      dataType: 'json',
      contentType: 'application/json',
      headers: {
        'Authorization': `Bearer ${CFR.Config.BITLY_BEARER_TOKEN}`,
      },
    }).done(resp => {
      callback(resp.link);
    }).fail((jqXHR, textStatus, errorThrown) => {
      console.log('Bitly Error!');
      console.log(errorThrown); // Error
    });
  }

  CFR.Utils.getQueryVariable = function( variable ){
    var query = window.location.search.substring(1);
    var vars = query.split( '&' );
    for( var i=0; i < vars.length; i++ ){
      var pair = vars[i].split( '=' );
      if( pair[0] == variable ){
        return pair[1];
      }
    }
    return (false);
  };

})(jQuery, Drupal);
