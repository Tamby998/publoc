<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Publoc-Prestataire</title>
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
      <style media="screen">

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
                        <span class="sr-only">Prestataire</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo base_url() ?>index.php/homePrestataireControlleur" class="navbar-brand">Publoc-Prestataire</a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li><a href="<?php echo base_url() ?>index.php/homePrestataireControlleur/list_demande">Demande Client</a></li>
                                 <li><a class="custom-b" href="<?php echo base_url() ?>index.php/homePrestataireControlleur/logout">Deconnecter</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                             <ul>
                               <li><a href="<?php echo base_url() ?>index.php/homePrestataireControlleur">Accueil</a></li>
                               <li> <a href="<?php echo base_url() ?>index.php/homePrestataireControlleur/fiche/<?php echo $_SESSION['ID_PRESTATAIRE']; ?>">Fiche</a></li>
                               <li><a href="<?php echo base_url() ?>index.php/homePrestataireControlleur/realisation/<?php echo $_SESSION['ID_PRESTATAIRE']; ?>">Realisation</a></li>
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

      <?php if (isset($fiche->ID_PRESTATAIRE) && $fiche->ID_PRESTATAIRE  == $_SESSION['ID_PRESTATAIRE']){?>
        <main id="main">
          <h1 id="title">Fiche Prestataire</h1>
          <p id="description">Veuillez remplir le formulaire.</p>

          <form id="survey-form" action="<?php echo site_url('prestataireControlleur/update_fiche')?>" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="txt_hidden" value="<?php echo $_SESSION['ID_PRESTATAIRE']; ?>">
            <input type="hidden" name="id" value="<?php echo $fiche->id; ?>">
            <div class="form__item">
              <label for="name" id="name-label">Description</label>
              <input id="description" name="description" type="text" placeholder="Description ..." value="<?php echo $fiche->description; ?>" required>
            </div>
            <div class="form__item">
              <label for="number" id="number-label">Nombre d'equipe :</label>
              <input id="nbre" name="nbre" type="number" placeholder="Equipe" value="<?php echo $fiche->nbre; ?>" min="1" max="20">
            </div>

            <div class="form__item form__item--dropdown">
              <label for="dropdown">Services:</label>
              <select id="service" name="service">
                <option value="<?php echo $fiche->service; ?>"><?php echo $fiche->service; ?></option>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
              </select>
            </div>

            <!--<div class="form-group">
                <label for="exampleFormControlFile1">Couverture</label>
                <input type="file" id="photo_coverture" name="photo_coverture" class="form-control-file" value="<?php echo $fiche->photo_coverture; ?>" required>
            </div>-->
            <div class="form__item form__item--submit">
              <input type="submit" id="submit">
            </div>

          </form>
        </main><br><br><br><br>
      <?php }else { ?>
        <main id="main">
          <h1 id="title">Fiche Prestataire</h1>
          <p id="description">Veuillez remplir le formulaire.</p>

          <form id="survey-form" action="<?php echo site_url('prestataireControlleur/save_fiche')?>" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="txt_hidden" value="<?php echo $_SESSION['ID_PRESTATAIRE']; ?>">
            <input type="hidden" name="id">
            <div class="form__item">
              <label for="name" id="name-label">Description</label>
              <input id="description" name="description" type="text" placeholder="Description ..." required>
            </div>
            <div class="form__item">
              <label for="number" id="number-label">Nombre d'equipe :</label>
              <input id="nbre" name="nbre" type="number" placeholder="Equipe" min="1" max="20">
            </div>

            <div class="form__item form__item--dropdown">
              <label for="dropdown">Services:</label>
              <select id="service" name="service">
                <?php if((sizeof($services))>0){
                foreach($services as $info){
                ?>
                <option value="<?php echo $info->service; ?>"><?php echo $info->service; ?></option>
                <?php
                }
                }else{ ?>
                  <option value="" >Aucun service pour le moments!</option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Couverture</label>
                <input type="file" id="photo_coverture" name="photo_coverture" class="form-control-file" required>
            </div>
            <div class="form__item form__item--submit">
              <input type="submit" id="submit">
            </div>

          </form>
        </main><br><br><br><br>
<?php } ?>





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
                <div class="col-12 col-md-6 text-center border-right border-left">
                 <a  <h5 style="font-weight: 600;">Conditions Generales</h5>
                  <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-12 col-md-3">
                  <h5 style="font-weight: 600;">Contact</h5>
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">(+261) 34 *******</a></li>
                    <li><a class="text-muted" href="#">example@gmail.com</a></li>
                  </ul>
                </div>
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


<style media="screen">
:root {
--accent-color: #106062;
--light-color: #edd0a4;
}

html {
font-size: 16px;
}

#main {
width: 40%;
max-width: 720px;
min-width: 600px;
margin: 2% auto;

opacity: 0.8;
padding: 2em;

border: 10px solid #ffc547;
border-width: 32px 44px 12px 44px;

border-radius: 40px;
position: relative;
}

#main:before {
content: "";
width: 60%;
height: 40px;
background: transparent;
position: absolute;
top: -24px;
left: 20%;
border: 5px solid #222;
border-width: 20px 5px 5px 5px;
border-radius: 0 0 20px 20px;
}

#title {
background: var(--accent-color);
margin-left: -8px;
margin-right: -8px;
padding: 16px 8px;

color: white;
border-radius: 50px;
text-align: center;
}
#description {
text-align: center;
margin-bottom: 3em;
}

.form__item {
display: flex;
flex-direction: column;
margin: 1.2em 0;
}

.form__item label, .form__item legend {
margin-bottom: 0.25em;
}

.form__item input {
padding: 12px 8px;
border-radius: 0;
background: #dedede;
border: 2px solid white;
}

.form__item input:focus {
border-color: var(--light-color);
outline: none;
background: #eee;
}

.form__item--dropdown select {
padding: 4px;
border: 1px solid black;
}

.form__item--radio input, .form__item--checkbox input {
 margin-right: 0.5em;
}

.form__item--submit {
align-items: center;
margin-top: 3em;
}

#submit {
background: var(--accent-color);
color: white;
width: 50%;
border-radius: 30px;
border: 2px solid white;
}

#submit:hover {
background: white;
border-color: var(--accent-color);
color: var(--accent-color);
}

@media (min-width:720) {
html {
  font-size: 18px;
}
}

</style>

      <!--main js-->
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
