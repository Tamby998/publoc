
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps V3 API Sample</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3rbkk5MwXeZqcnCumsrms90lztTEp4LM&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script type="text/javascript">

      var map;
      var infoWindow;

      function initialize(lt,lg) {
        var mapDiv = document.getElementById('map-canvas');
        map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(lt, lg),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        infoWindow = new google.maps.InfoWindow();
        <?php foreach ($infos AS $row) {?>
                var latview = '<?php echo $row->LATITUDE ?>';
                var longview = '<?php echo $row->LOGITUDE ?>';
                var messview = '<?php echo $row->TYPE ?>';
                createMarker(latview, longview,messview);
        <?php } ?>

      }


        function createMarker(lt,lg,message) {
          var latLng = new google.maps.LatLng(lt,lg);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });

          google.maps.event.addListener(marker, 'click', function() {
            var myHtml = '<strong>'+message+'</strong>';
            infoWindow.setContent(myHtml);
            infoWindow.open(map, marker);
          });
        }


    </script>
  </head>
    <body style="font-family: Arial; border: 0 none;" onload="initialize(-6.875046,107.614174)">
    <div id="map-canvas" style="width: 500px; height: 400px"></div>
  </body>
</html>
