<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Publoc - Accueil</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>


  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3rbkk5MwXeZqcnCumsrms90lztTEp4LM&callback=initMap&libraries=&v=weekly"
  defer
  ></script>
  <script type="text/javascript" src="https://jawj.github.com/OverlappingMarkerSpiderfier/bin/oms.min.js"></script>
  <style type="text/css">
  body {
  background-color:  #eee;
}
.title {

    margin-bottom: 50px;
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;

}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
 lex-direction: column;
}

.btn {
  margin-top: auto;
}
  /* Always set the map height explicitly to define the size of the div
  * element that contains the map. */
  #mymap {
     height: 80vh;
     width: 95vw;
     top: 100px;
     left: 10px;
     position: relative;
   }
   .map-contener{
     position: relative;
   }
  </style>
  <script type="text/javascript">

  function initMap() {
    let locations = [
      <?php foreach ($infos AS $row) {?>
        <?php
        $status = $row->status;
        $status_panneau = $row->STATUS;
          if ($status == 1) { ?>
            <?php if ($status_panneau ==1 ) {?>
            <?php $mes= '<div class="info_content">' .
                '<center><h3>'.$row->VILLE.'</h3></center>' .
                '<center><p>' .$row->INFO.'</p></center>'.
                '<center><p>'.$row->TYPE.'</p>' . '</div></center>' .
                '<center><a class="btn btn-info" href="'.base_url().'index.php/loginClient">Plus de details</a></center>'; ?>
       ['<?= $mes ?>',<?= $row->LATITUDE; ?>,<?= $row->LOGITUDE; ?>],
       <?php }else{ ?>

<?php  } ?>
      <?php
    }else { ?>

      <?php
    }
        ?>
  <?php } ?>
    ];
    console.log(locations)
    let map = new google.maps.Map(document.getElementById("mymap"), {
      zoom: 5.5,
      center: { lat: -18.77719249999, lng: 46.8543280000 }
    });

    var oms = new OverlappingMarkerSpiderfier(map);
    var markers = [];
  	for (var i = 0; i < locations.length; i++) {
  		var markerOptions = {
  			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
  			title: locations[i][0],
  			loc: locations[i]
  		};
  		var marker = new google.maps.Marker(markerOptions);
  		markers.push(marker);
  		oms.addMarker(marker);
  	}

    var markerClusterer = new MarkerClusterer(map, markers, {
  		//maxZoom: 9, // maxZoom set when clustering will stop
  		imagePath: 'https://cdn.rawgit.com/googlemaps/js-marker-clusterer/gh-pages/images/m'
  	});
    console.log(markerClusterer)
    var bounds = new google.maps.LatLngBounds();
  	for (var i = 0; i < markers.length; ++i) {
  		bounds.extend(markers[i].position);
  	}
  	map.fitBounds(bounds);

    var infoWindow = new google.maps.InfoWindow();
  	oms.addListener('click', function(marker, event) {
  		infoWindow.setContent(marker.loc[0]);
  		infoWindow.open(map, marker);
  	});

    /*// Limit the maximum zoom level when all marker are on the same position in a cluster
  	google.maps.event.addListener(markerClusterer, 'clusterclick', function(cluster) {

  		map.fitBounds(cluster.getBounds()); // Fit the bounds of the cluster clicked on
      console.log(map.getZoom())
  		if (map.getZoom() > 14) {
  			map.setZoom(14);
  		}
  	});*/

  }

</script>

      <link href="<?php echo base_url('assets/assets/img/favicon.png') ?>" rel="icon">
      <link href="<?php echo base_url('assets/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="<?php echo base_url('assets/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/aos/aos.css') ?>" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="<?php echo base_url('assets/assets/css/style.css') ?>" rel="stylesheet">

      <!-- =======================================================
      * Template Name: Rapid - v2.2.0
      * Template URL: https://bootstrapmade.cosm/rapid-multipurpose-bootstrap-business-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
    </head>

    <body >
        <header id="header" class="fixed-top header-transparent">
          <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="<?php echo base_url() ?>index.php/Welcome"><img src="<?php echo base_url('assets/logo.jpg') ?>" style="max-width:100px; margin-top: -7px;" class="img-responsive" alt="Cinque Terre">Pub'Loc</a></h1>
            <nav class="main-nav d-none d-lg-block">
              <ul>
                <li class="active"><a href="<?php echo base_url() ?>index.php/Welcome">>Accueil</a></li>
                <li><a href="<?php echo base_url() ?>index.php/Welcome/concepteur">Annuaire</a></li>
                <li><a href="<?php echo base_url() ?>index.php/Blog/blog">Blog</a></li>
                <li class="drop-down"><a href="#">Connexion</a>
                  <ul>
                    <li><a href="<?php echo base_url() ?>index.php/loginClient">Client</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/loginRegisseur">Regisseur</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/loginPrestataire">Prestataire</a></li>
                  </ul>
                </li>
              </ul>
            </nav><!-- .main-nav-->

          </div>
        </header>
<br>
        <div class="map-contener">
          <div id="mymap"></div>
        </div>

        <br><br><br><br>
        <div class="container py-3">
      <div class="title h1 text-center"></div>
      <!-- Card Start -->
      <div class="card">
        <div class="row ">
          <!-- Carousel start -->
          <div class="col-md-5">
            <div id="CarouselTest" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
                </div>
                <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <!-- End of carousel -->
        </div>
      </div>
      <!-- End of card -->

      </div>


      <footer class="container my-md-5 pt-md-5 border-top">
            <div class="row py-4 border-bottom">
              <div class="col-12 col-md-3">
                <h5 style="font-weight: 600;">Qui sommes nous?</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                </ul>
              </div>
              <div class="col-12 col-md-2 border-right border-left">
                <h5 style="font-weight: 600;">S'inscrire</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="<?php echo base_url() ?>index.php/clientControlleur">Client</a></li>
                  <li><a class="text-muted" href="<?php echo base_url() ?>index.php/regisseurControlleur">Regisseur</a></li>
                  <li><a class="text-muted" href="<?php echo base_url() ?>index.php/prestataireControlleur">Prestataire</a></li>
                </ul>
              </div>
              <div class="col-12 col-md-3 text-center border-right border-left">
               <a  <h5 style="font-weight: 600;">Conditions Generales</h5>
                <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div><br>
              <center>
              <div class="col-12 col-md-3 text-center">
                <h5 style="font-weight: 600;">Contact</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">(+261)34*******</a></li>
                  <li><a class="text-muted" href="#">example@gmail.com</a></li>
                </ul>
              </div>
            </center>
            </div>


    <div class="text-center py-4">
      <p class="text-secondary"><a href="https://www.facebook.com/tamby.heriharson/">© Cree par. STOI.</a></p>
      <div class="">

           <a href="/#" class="w-6 mx-1">
              <svg class="fill-current" width="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                 <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                    5.373,-12 12,-12c6.627,0 12,5.373
                    12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                    0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                    -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
              </svg>
           </a>
           <a href="/#" class="w-6 mx-1">
              <svg class="fill-current" width="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                 <g id="Layer_1">
                    <circle id="Oval" cx="12" cy="12" r="12"></circle>
                    <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                       -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                       -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                       -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                       -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                       0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                       2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                       1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                       0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                       -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                       -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                       -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                       0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                       0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                 </g>
              </svg>
           </a>
           <a href="/#" class="w-6 mx-1">
              <svg class="fill-current" width="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                 <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                    3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                    -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                    -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                    -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                    0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                    3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                    -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                    -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                    1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                    -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                    -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                    0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                    0.4,1.5l0,4.5l2.9,0Z"></path>
              </svg>
           </a>
        </div>
    </div>
        </footer>




  		<!-- Vendor JS Files -->
  	  <script src="<?php echo base_url('assets/assets/vendor/jquery/jquery.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/php-email-form/validate.js') ?>"></script>
  	  <script src="<?php  echo base_url('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/counterup/counterup.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/venobox/venobox.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  	  <script src="<?php echo base_url('assets/assets/vendor/aos/aos.js') ?>"></script>

  	  <!-- Template Main JS File -->
  	  <script src="<?php echo base_url('assets/assets/js/main.js') ?>"></script>

  	</body>

  </html>
