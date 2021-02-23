<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Multiple marker location in google map</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #mymap {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="mymap"></div>

<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
    };

    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mymap"), mapOptions);
    //map.setTilt(50);
    <?php if((sizeof($infos))>0){
    foreach($infos as $info){
    ?>
    // Multiple markers location, latitude, and longitude
    var markers = [
        ['<?php echo $info->NOM_EMPLACEMENT; ?>',
          <?php echo $info->LATITUDE; ?>,
          <?php echo $info->LOGITUDE;?>],
    ];

    // Info window content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3><?php echo $info->VILLE; ?></h3>' +
        '<p><?php echo $info->ETAT; ?>.</p>' + '</div>'+
        '<p><?php echo "$info->NOM_EMPLACEMENT"; ?></p>'+
        '<a href="<?php echo base_url() ?>index.php/Welcome" class="btn btn-info">Reserver</a>'
        ],
    ];

    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Place each marker on the map
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });

        // Add info window to marker
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(7);
        google.maps.event.removeListener(boundsListener);
    });
    <?php
    }
    }else{ ?>
    <tr><td colspan="100">Data Not Found</td></tr>
    <?php } ?>
}
</script>
<script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3rbkk5MwXeZqcnCumsrms90lztTEp4LM
&callback=initMap">
    </script>
  </body>
</html>
