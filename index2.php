<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      .wrap { max-width: 75em; min-height: 40em; height:100%; width:100%; margin: 0 auto; padding-top: 2.5%;}
      #map-canvas { height: 90%; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2xRxYxsXecANu0RN0NKftIesSzCF4HpQ&sensor=true">
    </script>
    <script type="text/javascript">
      var map;
      var centerPos = new google.maps.LatLng(-12.9410645,-38.4437675);
      var zoomLevel = 16;
      var data = "!3m1!4b1!4m5!3m4!1s0x7161a7e4b857c1b:0x86f3ef9ca1d664e1!8m2!3d-12.9417899!4d-38.4389824";
      function initialize() {
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };

        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions);

                  // Define the LatLng coordinates for the polygon's path.
          var triangleCoords = [
            {lat: 25.774, lng: -80.190},
            {lat: 18.466, lng: -66.118},
            {lat: 32.321, lng: -64.757},
          ];

          // Construct the polygon.
          var bermudaTriangle = new google.maps.Polygon({
            paths: triangleCoords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 3,
            fillColor: '#FF0000',
            fillOpacity: 0.35
          });
          bermudaTriangle.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  <div class="wrap">
    <div id="map-canvas"></div>
  </div>
  </body>
</html>