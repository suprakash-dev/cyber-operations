'use strict';
(function ($, Drupal) {

  Drupal.behaviors.cstmap = {
    attach: function (context, settings) {
      
      var initialized = false;
      
      $(document).on('breakpoints_change', function() {
        if (!initialized) {
          Drupal.behaviors.cstmap.attach.initMap();
          initialized = true;
        }
      });

      Drupal.behaviors.cstmap.attach.initMap = function() {
        
        var defaultSettings = {
          scrollZoom: false,
          container: 'map-view__content',
          center: [0,10],
          maxBounds: [[-185, -65], [180, 80]],
          renderWorldCopies: false,
          minZoom: 0,
          maxZoom: 20,
          zoom: 0,
          style: 'mapbox://styles/webmastercfr/ckcxarysy0gc51jnnu445cjc0',
        };

        var map_container = document.getElementById(defaultSettings.container);
        const aspect_ratio = 1.94;
        
        if (CFR.Breakpoints.is('mobile')) {
          const max_width = window.innerWidth;
          const map_height = parseInt(max_width/aspect_ratio);

          map_container.style.setProperty('height',map_height+'px');
          map_container.style.setProperty('max-width', max_width+'px');
          map_container.style.setProperty('margin', '0 auto');
          defaultSettings.center = [0,25];
          
        } else {  
          const max_width = window.innerWidth;
          const map_height = parseInt(max_width/aspect_ratio);

          map_container.style.setProperty('height', map_height+'px');
          map_container.style.setProperty('max-width', max_width+'px');
          map_container.style.setProperty('margin', '0 auto');
          defaultSettings.dragPan = false;
        }
        
        mapboxgl.accessToken = global_data.map.mapboxKey;
        
        map = new mapboxgl.Map(defaultSettings);

        map.doubleClickZoom.disable();
        map.dragRotate.disable();
        map.touchZoomRotate.disableRotation();
        
        map_filters['sectors'] = '';
        map_filters['year'] = '';

        map.on('load', function() {
          $('.cst-map-view').removeClass('loading');
          Drupal.behaviors.cstmap.attach.addMarkers();
        });

      };

      Drupal.behaviors.cstmap.attach.addMarkers = function() {
        let api_url = global_data.config.markers.api;
        if('sectors' in map_filters || 'year' in map_filters) {
          api_url = api_url +'?victim_category='+map_filters['sectors']+'&year='+map_filters['year'];
        }
        $.getJSON(api_url, function( data ) {
          var featues_collection = data.features;
          
          $.each( featues_collection, function( index, marker ) {
            const { country_name, incidents_range, incidents_count } = marker.properties;
            var markerEl = document.createElement('div');
            markerEl.className = 'map-view__marker map-view__marker--range-'+incidents_range;
            
            //pop html
            const popupEl = document.createElement('div');
            popupEl.className = 'map-view__tooltip';
            const popupCountry = document.createElement('div');
            popupCountry.className = 'map-view__title';
            popupCountry.innerHTML = country_name;
            popupEl.appendChild(popupCountry);
            const popupIncidents = document.createElement('div');
            popupIncidents.className = 'map-view__description';
            popupIncidents.innerHTML = (incidents_count > 1) ? incidents_count +" cyber operations sponsored" : incidents_count +" cyber operation sponsored";
            popupEl.appendChild(popupIncidents);
            
            let tooltip_right_bound = 90;
            if (CFR.Breakpoints.is('mobile')) {
              tooltip_right_bound = 20;
            }
            let anchor = 'left';
            if(marker.geometry.coordinates[0] > tooltip_right_bound ) {
              anchor = 'right';
            }
            
            let offset = 0;
            if(incidents_count < 40) {
              offset = parseInt(incidents_count/2) + 5;
            }
            else if (incidents_count < 80) {
              offset = parseInt(incidents_count/2);
              if (CFR.Breakpoints.is('mobile')) {
                offset = parseInt(incidents_count/2) - 10;
              }
            }
            else if(incidents_count < 125) {
              offset = parseInt(incidents_count/2) - 5;
              if (CFR.Breakpoints.is('mobile')) {
                offset = parseInt(incidents_count/2) - 25;
              }
            }
            else {
              offset = parseInt(incidents_count/2) - 20;
              if (CFR.Breakpoints.is('mobile')) {
                offset = parseInt(incidents_count/2) - 50;
              }
            }

            const mapboxPopup = new mapboxgl.Popup({
              offset: offset,
              anchor: anchor,
              closeButton: false,
              closeOnClick: true
            }).setDOMContent(popupEl);

            const mapboxMarker = new mapboxgl.Marker(markerEl)
              .setLngLat(marker.geometry.coordinates)
              .setPopup(mapboxPopup)
              .addTo(map);

            all_markers.push(mapboxMarker);
            
            markerEl.addEventListener('mouseenter', () => {
              if (mapboxPopup.isOpen()) return;
              mapboxMarker.togglePopup();
            });
      
            popupEl.parentElement.addEventListener('mouseleave', () => {
              mapboxMarker.togglePopup();
            });

            markerEl.addEventListener('mouseleave', () => {
              if($(".mapboxgl-popup").length != 0){
                mapboxMarker.togglePopup();
              }
            });
            
          });
        });
      }

      Drupal.behaviors.cstmap.attach.removeMarkers = function() {
        let i = 0;
        while (all_markers[i]) {
          all_markers[i].remove();
          i += 1;
        }
      }

      Drupal.behaviors.cstmap.attach.getGlobalVars = function() {
        return window.__INITIAL_STATE__ || {};
      }
      
      var global_data = Drupal.behaviors.cstmap.attach.getGlobalVars();
      var map = '';
      var map_filters = [];
      var all_markers = [];
      Drupal.behaviors.cstmap.attach.initMap();
      
      //filters logic
      $('#edit-sectors').change( function(){
        if($(this).val() != '') {
          map_filters['sectors'] = $(this).val();
        }
        else {
          map_filters['sectors'] = '';
        }
        Drupal.behaviors.cstmap.attach.removeMarkers();
        Drupal.behaviors.cstmap.attach.addMarkers();
      });

      $('#edit-years').change( function(){
        if($(this).val() != '') {
          map_filters['year'] = $(this).val();
        }
        else {
          map_filters['year'] = '';
        }
        Drupal.behaviors.cstmap.attach.removeMarkers();
        Drupal.behaviors.cstmap.attach.addMarkers();
      });

      $('#edit-years,#edit-sectors').on('mouseover', function(event) {
        if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
          $('meta[name=viewport]').attr('content', 'width=device-width,initial-scale=1.0,maximum-scale=1');
        }    
      });

      $('#edit-years,#edit-sectors').on('mouseleave', function(event) {
        if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
          $('meta[name=viewport]').attr('content', 'width=device-width,initial-scale=1.0');
        }
      });

    }
  };
})(jQuery, Drupal);
