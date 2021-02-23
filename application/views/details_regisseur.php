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
       <header id="header" class="top-head">
          <!-- Static navbar -->
          <nav class="navbar navbar-default">
             <div class="container-fluid">
                <div class="row">
                   <div class="col-md-4 col-sm-12 left-rs">
                      <div class="navbar-header">
                         <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                         <span class="sr-only">Client</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         </button>
                         <a href="<?php echo base_url() ?>index.php/homeClientControlleur" class="navbar-brand">Publoc-Client</a>
                      </div>
                   </div>
                   <div class="col-md-8 col-sm-12">
                      <div class="right-nav">
                         <div class="login-sr">
                            <div class="login-signup">
                               <ul>
                                  <li><a href="<?php echo base_url() ?>index.php/Blog/blog_client">Blog</a></li>
                                  <li><a class="custom-b" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/logout">Deconnecter</a></li>
                               </ul>
                            </div>
                         </div>
                         <div class="nav-b hidden-xs">
                            <div class="nav-box">
                               <ul>
                                  <li><a href="<?php echo base_url() ?>index.php/homeClientControlleur">Accueil</a></li>
                                  <li> <a href="<?php echo base_url() ?>index.php/homeClientControlleur/concepteur">Annuaire</a></li>
                                  <li><a href="<?php echo base_url() ?>index.php/homeClientControlleur/profile">Profile</a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!--/.container-fluid -->
          </nav>
       </header>

       <?php $gerer = $detail->gerer;
        if ($gerer == 0){ ?>
          <div class="container">
              <div class="jumbotron">
                  <div class="row text-center">
                      <div class="col-lg-4">
                          <div class="text-center">
                              <div style="overflow:hidden; border-radius:50%;">
                                  <img src="https://www.jcdecauxafrica.com/sites/default/files/styles/jcd_asset_gallery/624/public/assets/image/2018/06/jcdecaux_product_offering_-_madagascar_h-1.jpg"
                                       class="img-fluid">
                              </div>
                          </div>
                          <h2 class="name"><?php echo $contact->ENTREPRISE; ?></h2>
                          <h4 class="number">#<?php echo $contact->ID_REGISSEUR;; ?></h4>
                      </div>
                      <div class="col-lg-8">
                          <table class="table">
                              <tbody>
                              <tr>
                                  <th><i class="fa fa-envelope-open-o" aria-hidden="true"> Email</i></th>
                                  <td><?php echo $contact->EMAIL_REGISSEUR; ?></td>
                              </tr>
                              <tr>
                                  <th><i class="fa fa-volume-control-phone" aria-hidden="true">  Contact</i></th>
                                  <td><?php echo $contact->CONTACT_REGISSEUR; ?></td>
                              </tr>
                              <tr>
                                  <th><i class="fa fa-map-marker" aria-hidden="true">Adresse</i></th>
                                  <td><?php echo $contact->ADRESSE; ?></td>
                              </tr>
                              <tr>
                                  <th class="notice"><a href="<?php echo base_url() ?>index.php/homeClientControlleur">Retour</a></th>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="row text-center">
                      <div class="col-lg-12">
                      </div>
                  </div>
              </div>
          </div>

       <?php }else { ?>

         <div class="container">
             <div class="jumbotron">
                 <div class="row text-center">
                     <div class="col-lg-4">
                         <div class="text-center">
                             <div style="overflow:hidden; border-radius:50%;">
                                 <img src="https://www.jcdecauxafrica.com/sites/default/files/styles/jcd_asset_gallery/624/public/assets/image/2018/06/jcdecaux_product_offering_-_madagascar_h-1.jpg"
                                      class="img-fluid">
                             </div>
                         </div>
                         <h2 class="name"><?php echo $contact->ENTREPRISE; ?></h2>
                         <h4 class="number">#<?php echo $contact->ID_REGISSEUR;; ?></h4>
                     </div>
                     <div class="col-lg-8">
                         <table class="table">
                             <tbody>
                             <tr>
                                 <th><i class="fa fa-envelope-open-o" aria-hidden="true"> Email</i></th>
                                 <td>Wellcomm text@email.com </td>
                             </tr>
                             <tr>
                                 <th><i class="fa fa-volume-control-phone" aria-hidden="true">  Contact</i></th>
                                 <td>Wellcomm 034 ** *** **</td>
                             </tr>
                             <tr>
                                 <th><i class="fa fa-map-marker" aria-hidden="true">Adresse</i></th>
                                 <td>Wellcomm Adresse</td>
                             </tr>
                             <tr>
                                 <th class="notice"><a href="<?php echo base_url() ?>index.php/homeClientControlleur">Retour</a></th>
                             </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <div class="row text-center">
                     <div class="col-lg-12">
                     </div>
                 </div>
             </div>
         </div>
<?php } ?>



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
