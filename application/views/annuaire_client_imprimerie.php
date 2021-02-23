<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Publoc-Annuaire</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <link href="<?php echo base_url('assets/assets/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
     

      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

      <style>
         body{
            font-family: 'Nunito';
         }
      </style>
    </head>
    
    <body>
    <header id="header" class="text-gray-800 sticky top-0 flex shadow-lg py-2 bg-white" style="z-index:1000;">
         <div class="p-2 flex">
           <img width="50" src="<?php echo base_url('assets/logo.jpg') ?>">
           <a class='p-2 text-2xl' href="<?php echo base_url() ?>index.php/homeClientControlleur" class="navbar-brand">Publoc-Client</a>
         </div>
         <div class="flex flex-grow justify-center items-center">
           <a class='p-2 font-bold ' href="<?php echo base_url() ?>index.php/homeClientControlleur">Accueil</a>
           <a class='p-2 font-bold text-blue-700' href="<?php echo base_url() ?>index.php/homeClientControlleur/concepteur">Annuaire</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/Blog/blog_client">Blog</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/homeClientControlleur/profile">Mon Compte</a>
         </div>
         <div class="p-2 flex justify-center items-center">
           <a class="p-2 rounded text-white bg-blue-500 hover:bg-blue-700" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/logout">Deconnecter</a>
         </div>
      </header>

       <section id="services" class="services section-bg my-5">
         <center><a href="<?php echo base_url() ?>index.php/homeClientControlleur/concepteur" class="rounded bg-blue-600 p-2 text-white hover:bg-blue-700">Concepteur</a>      ||    <a href="<?php echo base_url() ?>index.php/homeClientControlleur/imprimerie"class="rounded bg-green-600 p-2 text-white hover:bg-green-700">Imprimerie</a>     ||     <a href="<?php echo base_url() ?>index.php/homeClientControlleur/conseil"class="rounded bg-blue-600 p-2 text-white hover:bg-blue-700">Conseil</a></center>
       <section id="clients" class="clients">
         <div class="container my-5" data-aos="zoom-in">

           <div class="owl-carousel clients-carousel">
             <img class="h-16" src="http://fr.madayp.com/img/mg/k/_1515598836-20-malaza-trading.png" alt="">
             <img class="h-16" src="http://fr.madayp.com/img/mg/h/1515599444-31-malaza-trading.jpg" alt="">
             <img class="h-16" src="http://fr.madayp.com/img/mg/r/1515598823-19-malaza-trading.png" alt="">
             <img class="h-16" src="https://madagascar-tourisme.com/wp-content/uploads/2017/11/Airtel-4G.jpg" alt="">
             <img class="h-16" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Telma-logo.jpg" alt="">
             <img class="h-16" src="https://mada-actus.info/wp-content/uploads/2019/06/5-astuces-pour-%C3%A9conomiser-ses-donn%C3%A9es-mobiles%E2%80%89Telma-Airtel-et-Orange%E2%80%89.jpg" alt="">
             <img class="h-16" src="https://www.mvola.mg/avance/images/goal/BAN_AVANCE_GOAL-01-1.jpg" alt="">
             <img class="h-16" src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Telma_logo_%28official%29.png" alt="">
           </div>
         </div>


       <div class="container" data-aos="fade-up">
         <div class="flex justify-center items-center">
           <span class="text-4xl text-gray-500">Imprimerie</span>
         </div>
         <div class="flex p-2 flex-wrap justify-center items-center">
           <?php if((sizeof($prestataires))>0){
           foreach($prestataires as $test){
           ?>
           <?php
             $status = $test->status;
             $imprimerie = $test->imprimerie;
             if ($status == 1) { ?>
               <?php if ($imprimerie == 1) { ?>
           <div class="rounded shadow-lg p-5 my-5 mx-10 wow bounceInUp text-gray-600" data-aos="zoom-in" data-aos-delay="100">
             <div class="box">
               <div  class="flex justify-center items-center mb-5" style="">
                 <img style="color: #3fcdc7;" src="<?php echo base_url() ?>upload/<?php echo $test->logo_prestataire; ?>" width="50px" >
               </div>
               <h4 class="title text-center font-bold text-2xl"><?php echo $test->NOM_PRESTATAIRE; ?></h4>
               <p class="description mb-2 text-center"><?php echo $test->TYPE_ABONNEMENT; ?></p>
               <p class="text-nowrap mb-5" style="">personnes dans leur equipe!</p>
               <div class="m-5 text-center">
               <a href="<?php echo base_url() ?>index.php/homePrestataireControlleur/plus_profile/<?php echo $test->ID_PRESTATAIRE; ?>" class="mt-5 rounded bg-blue-600 p-2 text-white hover:bg-blue-700">Voir le Profil</a>
               </div>
             </div>
           </div>
           
           <?php
           }else { ?>

           <?php
           }
             ?>
           <?php
           }else { ?>

           <?php
           }
             ?>
           <?php
           }
           }else{ ?>
           <tr><td colspan="100"><div class=""></div></td></tr>
           <?php } ?>
           </div>

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

       <!-- ======= Clients Section ======= -->

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
