<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Publoc - Blog</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
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
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	  <!-- ======= Header ======= -->
	  <header id="header" class="fixed-top header-transparent">
	    <div class="container d-flex align-items-center">

	      <h1 class="logo mr-auto"><a href="<?php echo base_url() ?>index.php/Welcome"><img src="<?php echo base_url('assets/logo.jpg') ?>" style="max-width:100px; margin-top: -7px;" class="img-responsive" alt="Cinque Terre">Pub'Loc</a></h1>
	      <!-- Uncomment below if you prefer to use an image logo -->
	      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

	      <nav class="main-nav d-none d-lg-block">
	        <ul>
	          <li><a href="<?php echo base_url() ?>index.php/Welcome">Accueil</a></li>
	          <li><a href="<?php echo base_url() ?>index.php/Welcome/concepteur">Annuaire</a></li>
	          <li class="drop-down"><a href="#">Connexion</a>
	            <ul>
	              <li><a href="<?php echo base_url() ?>index.php/loginClient">Client</a></li>
	              <li><a href="<?php echo base_url() ?>index.php/loginRegisseur">Regisseur</a></li>
	              <li><a href="<?php echo base_url() ?>index.php/loginPrestataire">Prestataire</a></li>
	            </ul>
	          </li>
	          <li class="active"><a href="<?php echo base_url() ?>index.php/Blog/blog">Blog</a></li>
	        </ul>
	      </nav><!-- .main-nav-->

	    </div>
	  </header>

    <br><br><br><br><br>
    <section id="about" class="about">

          <div class="container" data-aos="fade-up">
            <div class="row">
              <?php if((sizeof($blogs))>0){
              foreach($blogs as $blog){
              ?>
              <div class="col-lg-5 col-md-6">
                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                  <img src="<?php echo base_url() ?>upload/<?php echo $blog->image_blog; ?>" alt="">
                </div>
              </div>

              <div class="col-lg-7 col-md-6">
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                  <h2><?php echo $blog->titre; ?></h2>
                  <h3><?php echo $blog->resume; ?>.</h3>
                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="<?php echo base_url() ?>index.php/loginClient" class="btn btn-info">Voir Plus</a>
                  </div>
                </div>
              </div>
              <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

              <header class="section-header">
                <!-- <h3>Publicite</h3> -->
              </header>

              <div class="row justify-content-center">
                <div class="col-lg-8">

                  <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                      <img src="https://ict.io/wp-content/uploads/2018/04/MVola-1.jpg" class="testimonial-img" alt="">
                      <h3>Telma</h3>
                      <h4>Telma &amp; Madagascar</h4>
                      <p>
                        Telma est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="http://www.itmag.sn/wp-content/uploads/2010/12/airtel.jpg" class="testimonial-img" alt="">
                      <h3>Airtel</h3>
                      <h4>Airtel - Madagascar</h4>
                      <p>
                        Airtel est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Madagascar_logo.png" class="testimonial-img" alt="">
                      <h3>Lorem</h3>
                      <h4>Lorem Upsum</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Madagascar_logo.png" class="testimonial-img" alt="">
                      <h3>Ipsum</h3>
                      <h4>Lorem</h4>
                      <p>
                        Airtel est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                  </div>

                </div>
              </div>

            </div>
          </section><!-- End Testimonials Section -->
              <?php
              }
              }else{ ?>
              <tr><td colspan="100">Data Not Found</td></tr>
              <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

              <header class="section-header">
                <h3>Publicite</h3>
              </header>

              <div class="row justify-content-center">
                <div class="col-lg-8">

                  <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                      <img src="https://ict.io/wp-content/uploads/2018/04/MVola-1.jpg" class="testimonial-img" alt="">
                      <h3>Telma</h3>
                      <h4>Telma &amp; Madagascar</h4>
                      <p>
                        Telma est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="http://www.itmag.sn/wp-content/uploads/2010/12/airtel.jpg" class="testimonial-img" alt="">
                      <h3>Airtel</h3>
                      <h4>Airtel - Madagascar</h4>
                      <p>
                        Airtel est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Madagascar_logo.png" class="testimonial-img" alt="">
                      <h3>Lorem</h3>
                      <h4>Lorem Upsum</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>

                    <div class="testimonial-item">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Madagascar_logo.png" class="testimonial-img" alt="">
                      <h3>Ipsum</h3>
                      <h4>Lorem</h4>
                      <p>
                        Airtel est un opérateur de téléphonie mobile et un fournisseur d'accès Internet malgache. Cette entreprise offre également un service de transfert d'argent via mobile.
                      </p>
                    </div>

                  </div>

                </div>
              </div>

            </div>
          </section><!-- End Testimonials Section -->
              <?php } ?>
            </div>
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
