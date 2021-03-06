<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Publoc-Client</title>
      
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

      <link rel="preconnect" href="https://fonts.gstatic.com">

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3rbkk5MwXeZqcnCumsrms90lztTEp4LM&callback=initMap&libraries=&v=weekly"
      defer
      ></script>
      <script type="text/javascript" src="https://jawj.github.com/OverlappingMarkerSpiderfier/bin/oms.min.js"></script>
  <style type="text/css">
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #mymap {
      height: 100vh;
      width: 100vw;
      padding:0;
      margin:0;
      position: relative;
    }
    body{
      font-family: 'Nunito';
    }
    /*
    .recherche{
      background:#ff8;
      float:left;
      width:250px;
      height:100%;
      overflow:scroll;
    }
     Optional: Makes the sample page fill the window. */

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
                        '<h3><center>'.$row->VILLE.'</center></h3>' .
                        '<br/><center><img src="' .base_url(). 'upload/' .$row->image_panneau.'" width="200px" /></center>'.
                        '<p><center>' .$row->INFO.'</center></p>'.
                        '<p><center>Type :'.$row->TYPE.'</center></p>' . '</div><br>'.
                        '<div class="text-center"><a href="'.base_url().'index.php/homeClientControlleur/plusdetails/'.$row->ID_PANNEAU.'" class="rounded bg-green-700 my-2 p-2 text-white">Plus de details</a></div>' ; ?>
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
              center: { lat: -18.777, lng: 46.854 }
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

   </head>
   <body>
      <header id="header" class="flex shadow-lg py-2 bg-white" style="z-index:1000;">
         <div class="p-2 flex">
           <img width="50" src="<?php echo base_url('assets/logo.jpg') ?>">
           <a class='p-2 text-2xl' href="<?php echo base_url() ?>index.php/homeClientControlleur" class="navbar-brand">Publoc-Client</a>
         </div>
         <div class="flex flex-grow justify-center items-center">
           <a class='p-2 font-bold text-blue-700' href="<?php echo base_url() ?>index.php/homeClientControlleur">Accueil</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/homeClientControlleur/concepteur">Annuaire</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/Blog/blog_client">Blog</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/homeClientControlleur/profile">Mon Compte</a>
         </div>
         <div class="p-2 flex justify-center items-center">
           <a class="p-2 rounded text-white bg-blue-500 hover:bg-blue-700" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/logout">Deconnecter</a>
         </div>
      </header>
      <br>
      <div class="p-0 m-0 sticky top-5 z-40">
        <form class="flex justify-center items-center" action="<?php echo site_url('homeClientControlleur/recherche'); ?>" method="post">
                  <div class="flex p-2 rounded-full border border-blue-700 shadow-lg mb-5 bg-white">
                      <select class="text-gray-700 px-2 bg-transparent" name="ville" id="ville" required>
                         <option>Veuillez selectionner le Ville</option>
                         <?php if((sizeof($ville))>0){
                         foreach($ville as $info){
                         ?>
                         <option value="<?php echo $info->id; ?>"><?php echo $info->ville; ?></option>
                         <?php
                         }
                         }else{ ?>
                           <h1>Aucun ville recuperer</h1>
                         <?php } ?>
                      </select>
                       <select name="VILLE" id="VILLE" class="text-gray-700 px-2 bg-transparent" >
                         <option value="">Selectionner Quartier</option>
                       </select>
                     <select class="text-gray-700 px-2 bg-transparent" name="type" id="type" required>
                        <option>Veuillez selectionner le type</option>
                        <?php if((sizeof($types))>0){
                        foreach($types as $info){
                        ?>
                        <option value="<?php echo $info->id; ?>"><?php echo $info->type; ?></option>
                        <?php
                        }
                        }else{ ?>
                          <h1>Aucun type recuperer</h1>
                        <?php } ?>
                     </select>
                      <select name="TYPE" id="TYPE" class="text-gray-700 px-2 bg-transparent" >
                        <option value="">Selectionner Sous-type</option>
                      </select>
                      <select class="text-gray-700 px-2 bg-transparent" name="etat_regisseur" id="etat_regisseur" required>
                        <option value="1">Professionnel Uniquement</option>
                        <option value="0"></option>
                      </select>
                     <br>
                     <?php $compte = $_SESSION['TYPE_COMPTE']; ?>
                     <?php if ($compte == 'Professionnel') {?>
                      <input type="submit" name="submit" value="Recherche" class="bg-blue-700 p-2 rounded-full text-white hover:bg-blue-800">
                    <?php }else { ?>
                       <input type="submit" name="submit" value="Recherche" class="bg-blue-700 p-2 rounded-full text-white hover:bg-blue-800">
                     <?php } ?>
                  </div>
                </form>
               </div>
               <div class="map-contener p-0 m-0">
                  <div id="mymap" class=""></div>
                </div>
                <footer class="flex flex-col justify-center items-center text-gray-700 mt-5">
                        <div class="flex">
                          <div class="mx-2">
                            <h5 class="text-2xl font-bold mb-2">Qui sommes nous?</h5>
                            <ul class="list-unstyled text-small">
                              <li><a class="text-muted" href="#">Team</a></li>
                              <li><a class="text-muted" href="#">Locations</a></li>
                              <li><a class="text-muted" href="#">Privacy</a></li>
                            </ul>
                          </div>
                          <div class="mx-2 text-center">
                            <h5 class="text-2xl font-bold mb-2">Conditions Generales</h5>
                            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                          </div>
                          <div class="mx-2">
                            <h5 class="text-2xl font-bold mb-2">Contact</h5>
                            <ul class="list-unstyled text-small">
                              <li><a class="text-muted" href="#">(+261) 34 *******</a></li>
                              <li><a class="text-muted" href="#">example@gmail.com</a></li>
                            </ul>
                          </div>
                        </div>
                  <div class="text-center py-4">
                    <p class="text-secondary mb-2"><a href="https://www.facebook.com/tamby.heriharson/">© Cree par. STOI.</a></p>
                    <div class="flex justify-center items-center">
                         <a href="/#" class="px-2">
                            <svg class="fill-current" width="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                               <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                                  5.373,-12 12,-12c6.627,0 12,5.373
                                  12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                                  0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                                  -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                            </svg>
                         </a>
                         <a href="/#" class="px-2">
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
                         <a href="/#" class="px-2">
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

      <script src="<?php echo base_url('assets/presta/js/jquery-1.12.4.min.js') ?>"></script>

      <script>
      $(window).load(function(){
        $('#type').change(function(){

          let id_type = $(this).val();
          console.log('id' + id_type);
          if(id_type != '')
          {
            $.ajax({
              url:"<?php echo base_url(); ?>index.php/homeClientControlleur/fetch_state",
              method:"POST",
              data:{id_type:id_type},
              success:function(data)

              {
                $('#TYPE').html(data);
              }
            });
          }
          else
          {
            $('#sous_type').html('<option value="">Selectionner Sous-type</option>');
          }
        });


      });
    </script>
      <script>
      $(window).load(function(){
        $('#ville').change(function(){

          let id_ville = $(this).val();
          console.log('id' + id_ville);
          if(id_ville != '')
          {
            $.ajax({
              url:"<?php echo base_url(); ?>index.php/homeClientControlleur/fetch_state_quartier",
              method:"POST",
              data:{id_ville:id_ville},
              success:function(data)

              {
                $('#VILLE').html(data);
              }
            });
          }
          else
          {
            $('#VILLE').html('<option value="">Selectionner Quartier</option>');
          }
        });


      });
    </script>
   </body>
</html>
