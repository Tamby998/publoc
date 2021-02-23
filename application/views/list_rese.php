<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Publoc-Client</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/font-awesome.min.css') ?>">
      <!--bootstrap css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/bootstrap.min.css') ?>">
      <!--animate css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/animate-wow.css') ?>">
      <!--main css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/style.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/bootstrap-select.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/slick.min.css') ?>">
      <!--responsive css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/presta/css/responsive.css') ?>">
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
      <style media="screen">
      body {
background: #4a85d2;
}
.container {
margin-top: 2rem;
}
.col-lg-4 {
padding-right: 10px;
padding-left: 10px;
}
h1,
h2,
h3,
h4 {
text-align: center;
}
.jumbotron {
padding: 2rem 2rem;
background: #f9f9f9;
box-shadow: 16px 16px 5px 0px rgba(0, 0, 0, 0.1);
}
.table td,
.table th {
border-top: none;
}

.table thead th {
border-bottom: none;
}
th {
text-align: right;
font-style: normal;
font-weight: normal;
}
td {
text-align: center;
}
.name {
padding-top: 0.5rem;
}
.number {
padding-top: 0.2rem;
padding-bottom: 0.2rem;
}
.notice {
color: #dab804;
}
.about {
padding-top: 1.4rem;
}

      </style>
    </head>
    <body>
    <header id="header" class="sticky top-0 flex shadow-lg py-2 bg-white" style="z-index:1000;">
         <div class="p-2 flex">
           <img width="50" src="<?php echo base_url('assets/logo.jpg') ?>">
           <a class='p-2 text-2xl' href="<?php echo base_url() ?>index.php/homeClientControlleur" class="navbar-brand">Publoc-Client</a>
         </div>
         <div class="flex flex-grow justify-center items-center">
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/homeClientControlleur">Accueil</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/homeClientControlleur/concepteur">Annuaire</a>
           <a class='p-2 font-bold' href="<?php echo base_url() ?>index.php/Blog/blog_client">Blog</a>
           <a class='p-2 font-bold text-blue-700' href="<?php echo base_url() ?>index.php/homeClientControlleur/profile">Mon Compte</a>
         </div>
         <div class="p-2 flex justify-center items-center">
           <a class="p-2 rounded text-white bg-blue-500 hover:bg-blue-700" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/logout">Deconnecter</a>
         </div>
      </header>

       <?php if((sizeof($infos))>0){
       foreach($infos as $info){
        $fin = $info->fin;
       ?>
       <?php if ($fin != NULL): ?>


       <div class="container">
           <div class="jumbotron">
               <div class="row text-center">
                   <div class="col-lg-4">
                       <div class="text-center">
                           <div style="overflow:hidden; border-radius:50%;">
                               <img src="<?php echo base_url('upload/') ?><?php echo $info->image_panneau; ?>"
                                    class="img-fluid">
                           </div>
                       </div>
                       <h2 class="name"><?php echo $info->TYPE; ?></h2>
                       <h4 class="number">#<?php echo $info->FACE;; ?></h4>
                   </div>
                   <div class="col-lg-8">
                       <table class="table">
                           <tbody>
                           <tr>
                               <th><i class="fa fa-envelope-open-o" aria-hidden="true"> Service :</i></th>
                               <td><?php echo $info->SERVICE; ?></td>
                           </tr>
                           <tr>
                               <th><i class="fa fa-volume-control-phone" aria-hidden="true">  Information:</i></th>
                               <td><?php echo $info->INFO; ?></td>
                           </tr>
                           <tr>
                               <th><i class="fa fa-volume-control-phone" aria-hidden="true">  Habillage:</i></th>
                               <td><?php echo $info->HABILLAGE; ?></td>
                           </tr>
                           <tr>
                               <th><i class="fa fa-map-marker" aria-hidden="true">Ville</i></th>
                               <td><?php echo $info->VILLE; ?></td>
                           </tr>

                           </tbody>
                              <td>Debut : <?php echo $info->debut;?></td>
                              <td>Fin : <?php echo $info->fin;?></td>
                              <?php
                              $date1  = $info->debut;
                              $date2 = $info->fin;

                               // On transforme les 2 dates en timestamp
                               $date1 = strtotime($date1);
                               $date2 = strtotime($date2);
                               $nbJoursTimestamp = $date2 - $date1;
                               $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24


                               ?>
                              <td>Compteur : <?php echo $nbJours; ?> Jours</td>
                              <tr><td><a href="<?php echo base_url() ?>index.php/homeClientControlleur/contact/<?php echo $info->ID_REGISSEUR; ?>" class="btn btn-info">Proprietaire</a></td></tr>
                       </table>
                   </div>
               </div>
               <div class="row text-center">
                   <div class="col-lg-12">
                   </div>
               </div>
           </div>
       </div>
      <?php endif; ?>
       <?php
     }
       }else{ ?>
         <p>Auncun Emplacements !</p>
       <?php } ?>


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
       <!--bootstrap js-->
       <script src="<?php echo base_url('assets/presta/js/bootstrap.min.js') ?>"></script>
       <script src="<?php echo base_url('assets/presta/js/bootstrap-select.min.js') ?>"></script>
       <script src="<?php echo base_url('assets/presta/js/slick.min.js') ?>"></script>
       <script src="<?php echo base_url('assets/presta/js/wow.min.js') ?>"></script>
       <!--custom js-->
       <script src="<?php echo base_url('assets/presta/js/custom.js') ?>"></script>
    </body>
 </html>
