<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Publoc - Clients</title>
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

  </head>

  <body>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark pmd-navbar pmd-z-depth fixed-top">
      <li class="nav-item">
        <a class="navbar-brand" href="<?php echo base_url() ?>index.php/homeClientControlleur">Publoc - Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/homeClientControlleur">Accueil - Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Annuaires</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recherche</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/Blog"> Blogs</a>
      </li>
      <div class="dropdown pmd-dropdown pmd-user-info ml-auto">
          <a href="javascript:void(0);" class="btn-user dropdown-toggle media align-items-center" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
              <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
              <div class="media-body">
                  Profil
              </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <i class="material-icons md-light ml-2 pmd-sm"><?php echo $_SESSION['EMAIL_CLIENT']; ?></i>
              <a class="dropdown-item" href="#">Edit Profil</a>
              <a class="dropdown-item" href="<?php echo base_url() ?>index.php/homeClientControlleur/logout">Logout</a>
          </ul>
      </div>
  </nav>

  <?php
    if(isset($item)){
      foreach ($item as $item) {
        ?>
        <h1><?php echo $item->NOM_EMPLACEMENT; ?></h1>
    <?php  }
      }
   ?>



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
