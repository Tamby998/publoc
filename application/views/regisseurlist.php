<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Publoc-Admin </title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor1/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>index.php/homeAdminControlleur">
       <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
       </div>
       <div class="sidebar-brand-text mx-3">Publoc <sup>Admin</sup></div>
     </a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item ">
  <a class="nav-link" href="<?php echo base_url() ?>index.php/homeAdminControlleur">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Acceuil</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Client
</div>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo base_url('index.php/clientControlleur/listClient') ?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Listes Clients</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
    </svg>
    <span>Abonnement</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Regisseur et Prestataires
</div>

<!-- Nav Item - Charts -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo base_url('index.php/regisseurControlleur/listRegisseur') ?>">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
        <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
  </svg>
    <span>Liste des Regisseurs</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('index.php/prestataireControlleur/listPrestataire') ?>">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
    <span>Liste des Prestataires</span></a>
</li>

<!-- Heading -->
<div class="sidebar-heading">
  Ajouter des :
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('index.php/Blog') ?>">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-blockquote-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm5 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
      <path d="M3.734 6.352a6.586 6.586 0 0 0-.445.275 1.94 1.94 0 0 0-.346.299 1.38 1.38 0 0 0-.252.369c-.058.129-.1.295-.123.498h.282c.242 0 .431.06.568.182.14.117.21.29.21.521a.697.697 0 0 1-.187.463c-.12.14-.289.21-.503.21-.336 0-.577-.108-.721-.327C2.072 8.619 2 8.328 2 7.969c0-.254.055-.485.164-.692.11-.21.242-.398.398-.562.16-.168.33-.31.51-.428.18-.117.33-.213.451-.287l.211.352zm2.168 0a6.588 6.588 0 0 0-.445.275 1.94 1.94 0 0 0-.346.299c-.113.12-.199.246-.257.375a1.75 1.75 0 0 0-.118.492h.282c.242 0 .431.06.568.182.14.117.21.29.21.521a.697.697 0 0 1-.187.463c-.12.14-.289.21-.504.21-.335 0-.576-.108-.72-.327-.145-.223-.217-.514-.217-.873 0-.254.055-.485.164-.692.11-.21.242-.398.398-.562.16-.168.33-.31.51-.428.18-.117.33-.213.451-.287l.211.352z"/>
    </svg>
    <span>Blog</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

               <?php echo $_SESSION['username']; ?>

                </span>
                <img class="img-profile rounded-circle" src="https://png.pngtree.com/png-clipart/20190924/original/pngtree-administration-icon-in-trendy-style-isolated-background-png-image_4828089.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profileAdmin.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil Admin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/homeAdminControlleur/logout" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Deconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <center>
        <div class="row">
      			<div class="col-lg-12">
      				<h1 class="page-header">Regisseurs <span class=" glyphicon glyphicon-list-alt"></span></h1>
      			</div>
      		</div><!--/.row-->

      		<div class="row">
      			<div class="col-lg-12">
      				<div class="panel panel-primary">
      					<div class="panel-heading">Listes des regisseurs</div>
      					<div class="panel-body">

                  <div class="table-responsive">
      								<table class="table table-striped table-bordered table-hover" id="mydata">
      										  <thead>
      										  <tr>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-asterisk"></span> Identifiant</th>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-user"></span> Entreprise</th>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-plus"></span> Email</th>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-earphone"></span> Contact</th>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Adresse</th>
      										      <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Voir les </th>
                                <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Status</th>
                                <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Type Compte</th>
                                <th style="color: #333536;"><span class="glyphicon glyphicon-map-marker"></span> Voir</th>
      										  </tr>
      										  </thead>
                            <?php if((sizeof($regisseurs))>0){
                              foreach($regisseurs as $regisseur){
                                ?>
      										  <tbody>
                              <td><?php echo $regisseur->ID_REGISSEUR; ?></td>
                              <td><?php echo $regisseur->ENTREPRISE; ?></td>
                              <td><?php echo $regisseur->EMAIL_REGISSEUR; ?></td>
                              <td><?php echo $regisseur->CONTACT_REGISSEUR; ?></td>
                              <td><?php echo $regisseur->ADRESSE; ?></td>
                              <td><a href="<?php echo base_url() ?>index.php/RegisseurControlleur/listpanneau/<?php echo $regisseur->ID_REGISSEUR; ?>" class="btn btn-info">Panneaux</a></td>
                              <td>
                                <?php
                                  $status = $regisseur->status;
                                  if ($status == 1) { ?>
                                    <a href="update_status?$ID_REGISSEUR=<?php echo $regisseur->ID_REGISSEUR; ?>&$status=<?php echo $regisseur->status; ?>" type="button" class="btn btn-success" name="button">Active</a>
                               <?php
                             }else { ?>
                               <a href="update_status?$ID_REGISSEUR=<?php echo $regisseur->ID_REGISSEUR; ?>&$status=<?php echo $regisseur->status; ?>" type="button" class="btn btn-primary" name="button">Desactive</a>
                               <?php
                             }
                                 ?>
                              </td>
                              <td>
                                <?php
                                  $status = $regisseur->etat;
                                  if ($status == 1) { ?>
                                    <a href="update_type?$ID_REGISSEUR=<?php echo $regisseur->ID_REGISSEUR; ?>&$status=<?php echo $regisseur->etat; ?>" type="button" class="btn btn-success" name="button">Proffessionnel</a>
                               <?php
                             }else { ?>
                               <a href="update_type?$ID_REGISSEUR=<?php echo $regisseur->ID_REGISSEUR; ?>&$status=<?php echo $regisseur->etat; ?>" type="button" class="btn btn-primary" name="button">Non Proffessionnel</a>
                               <?php
                             }
                                 ?>
                              </td>
                              <td><a href="<?php echo base_url() ?>index.php/RegisseurControlleur/proffessionnel/<?php echo $regisseur->ID_REGISSEUR; ?>" class="btn btn-primary">Fichiers</a></td>
      										  </tbody>
                            <?php
                          }
                        }else{ ?>
                          <h1>Aucun ID_REGISSEUR recuperer</h1>
                        <?php } ?>
      								</table>
      								<br>
      							</div>
        <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <!-- <span>Copyright &copy; Your Website 2019</span> -->
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
		<!-- Bootstrap core JavaScript-->

<script src="<?php echo base_url('assets/vendor1/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor1/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor1/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor1/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

  <script src="<?php echo base_url('assets/assets1/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets1/plugins/dataTables/jquery.dataTables.js') ?>"></script>
</body>

</html>
