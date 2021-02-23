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
      :root {
  --bc: #f9f3ee;
  --bc-dark: #141412;
  --primary: rgb(161, 166, 252);
  --accent1: rgba(251,161,229,1);
  --accent2: rgba(241,196,161,1);
  --white: #ffffff;
  --black: #000000;
  /* Gray Colors */
  --bc-gray: #ede8e4;
  --gray: #9e9d9b;
  --gray-dark: #1c1a19;
  /* Gradients */
  --pace: linear-gradient(90deg, rgba(161,166,252,1) 0%, rgba(251,161,229,1) 50%, rgba(241,196,161,1) 100%);
  /* Sizes */
  --heading: 3.4rem;
  --paragraph: 1.1rem;
  --button-small: 1rem;
  /* Fonts */
  --font-main: "Poppins";
}
* {
  box-sizing: border-box;
}
html, body {
  margin: 0;
  width: 100%;
  font-family: var(--font-main);
  background-color: var(--bc);
  -webkit-font-smoothing: antialiased;
  scroll-behavior: smooth;
}
main {
  min-height: 100vh;
}
textarea {
  min-height: 10em;
  font-family: var(--font-main);
  transition: opacity .15s ease-in-out;
  resize: none;
}
textarea::-webkit-scrollbar-track {
  background-color: transparent;
}
textarea::-webkit-scrollbar {
  width: 8px;
  background-color: transparent;
}
textarea::-webkit-scrollbar-thumb {
  border-radius: 5em;
  background-color: var(--primary);
}
/* Global classes */
.space {
  min-height: 25vh;
}
.flexbox {
  display: flex;
  justify-content: center;
  align-items: center;
}
.flexbox-left {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.flexbox-right {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.flexbox-col {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}
.flexbox-col-left {
  display: flex;
  justify-content: flex-start;
  flex-direction: column;
  align-items: flex-start;
}
.flexbox-col-right {
  display: flex;
  justify-content: flex-end;
  flex-direction: column;
  align-items: flex-end;
}
.flexbox-left-start {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
}
.flexbox-space {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
/* Form */
.form-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
#form {
  width: 75%;
}
.form {
  width: 100%;
}
.form-title {
  margin: 1em 0 0 0;
  font-size: var(--heading);
  font-weight: 800;
}
.form-undertitle {
  margin: 0 0 1em 0;
  color: var(--gray);
  font-weight: 300;
}
.send-success {
  width: 100%;
  padding: 1em;
  border-radius: 4px;
  background-color: var(--light-green);
  color: var(--white);
}
.send-error {
  width: 100%;
  padding: 1em;
  border-radius: 4px;
  background-color: var(--red);
  color: var(--white);
}
.form-text {
  margin: 1em 0 .75em 2.2em;
  color: var(--gray-dark);
  font-weight: 300;
}
.form-input-grid {
  margin: 1.5em 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-column-gap: 1.5em;
}
.form-input-max {
  margin: 1.5em 0;
}
.form-input-wrapper {
  width: 100%;
  position: relative;
}
.form-input-wrapper i {
  left: 1em;
  position: absolute;
  font-size: 1.88rem;
  color: var(--primary);
  text-shadow: 0 0 4px rgba(161, 166, 252, .5);
}
#textarea textarea {
  border-radius: 2.25em;
}
#textarea i {
  top: .6em;
}
.form-input {
  width: 100%;
  padding: 1.2em 1.2em 1.2em 3.6em;
  font-size: 1.22rem;
  border-radius: 5em;
  box-shadow: 0 5px 20px 0 rgba(237, 232, 228, .8);
  background-color: var(--bc-gray);
  border: 2px solid var(--bc-gray);
  transition: border .15s ease-in-out;
}
.form-input:hover {
  border: 2px solid var(--primary);
}
.form-input:focus {
  outline: none;
  border: 2px solid var(--primary);
}
#form-button {
  font-size: 1.22rem;
}
/* Button */
.button-wrapper {
  margin: 2em 0 1em 0;
}
.button, .btn-secondary {
  margin: 0;
  width: 100%;
  position: relative;
  padding: 1.2em 1.8em;
  letter-spacing: .1em;
  text-align: center;
  color: var(--white);
  font-size: var(--button-small);
  background: var(--pace);
  background-size: 500%;
  border-radius: 50px;
  border: none;
  cursor: pointer;
  transform: scaleX(1);
  transition: transform .3s cubic-bezier(.175,.885,.32,1.275), filter .3s cubic-bezier(.175,.885,.32,1.275), bottom .3s cubic-bezier(.175,.885,.32,1.275), background-position 3s cubic-bezier(.455,.03,.515,.955), -webkit-transform .3s cubic-bezier(.175,.885,.32,1.275), -webkit-filter .3s cubic-bezier(.175,.885,.32,1.275);
}
.button {
  transition: transform .3s cubic-bezier(.175,.885,.32,1.275), bottom .3s cubic-bezier(.175,.885,.32,1.275), background-position 3s cubic-bezier(.455,.03,.515,.955), -webkit-transform .3s cubic-bezier(.175,.885,.32,1.275);
}
.button, .button .btn-secondary {
  background-position: 0 50%;
  bottom: 0;
}
.button .btn-secondary {
  left: 0;
  width: 100%;
  position: absolute;
  filter: blur(1rem);
  opacity: .8;
  z-index: -1;
  transform: scale3d(.9, .9, 1);
  transition: transform .3s cubic-bezier(.175,.885,.32,1.275), filter .3s cubic-bezier(.175,.885,.32,1.275), bottom .3s cubic-bezier(.175,.885,.32,1.275), background-position 3s cubic-bezier(.455,.03,.515,.955), -webkit-transform .3s cubic-bezier(.175,.885,.32,1.275), -webkit-filter .3s cubic-bezier(.175,.885,.32,1.275);
}
.button:focus, .button:hover {
  transform: scale3d(1.1, 1.1, 1);
  background-position: 100% 50%;
  outline: none;
  bottom: 2px;
}
.button:focus .btn-secondary, .button:hover .btn-secondary {
  background-position: 100% 50%;
  filter: blur(1.6rem);
  bottom: -5px;
}
/* Media Rules */
@media only screen and (max-width: 1660px) {
  :root {
      /* Sizes */
      --heading: 3rem;
  }
}
@media only screen and (max-width: 1456px) {
  :root {
      /* Sizes */
      --heading: 2.8rem;
  }
}
@media only screen and (max-width: 1024px) {
  :root {
      /* Sizes */
      --heading: 2.4rem;
  }
  /* Form */
  #form {
      width: 85%;
  }
}
@media only screen and (max-width: 756px) {
  :root {
      /* Sizes */
      --heading: 2.2rem;
  }
  /* Form */
  #form {
      width: 90%;
  }
}
@media only screen and (max-width: 576px) {
  /* Form */
  .form-input-grid {
      grid-template-columns: 1fr;
      grid-template-rows: 1fr 1fr;
      grid-column-gap: 0;
      grid-row-gap: 1.5em;
  }
}
@media only screen and (max-width: 496px) {
  :root {
      /* Sizes */
      --heading: 1.75rem;
  }
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
                                 <li><a href="<?php echo base_url() ?>index.php/homePrestataireControlleur">Home</a></li>
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
 <main class="flexbox-col">

         <div class="form-wrapper">
           <form id="form" method="post" name="emailform" action="<?php echo base_url() ?>index.php/homePrestataireControlleur/update">
             <h3 class="form-title">Modifier Profile</h3>
             <div class="form-input-grid">
               <input type="hidden" name="txt_hidden" value="<?php echo $_SESSION['ID_PRESTATAIRE']; ?>">
               <div>
               <p class="form-text">Nouveau Mot de Passe</p>
               <div class="form-input-wrapper flexbox-left">
                 <i class="uil uil-asterisk"></i>
                 <input class="form-input" id="MOT_DE_PASS" name="MOT_DE_PASS" type="password" placeholder="Mot de Passe" aria-label="" required>
               </div>
             </div>
               <div>
               <p class="form-text">Confiremr votre Mot de Passe</p>
               <div class="form-input-wrapper flexbox-left">
                 <i class="uil uil-asterisk"></i>
                 <input class="form-input" id="password" name="password" type="password" placeholder="Connfirmer Votre Mot de Passe" aria-label="" required>
                 <span id='message'></span>
               </div>
             </div>
               <div>
               <p class="form-text">Votre Contact</p>
               <div class="form-input-wrapper flexbox-left">
                 <i class="uil uil-asterisk"></i>
                 <input class="form-input" id="CONTACT_PRESTATAIRE" name="CONTACT_PRESTATAIRE" type="text" placeholder="Votre Contact..." value="<?php echo $_SESSION['CONTACT_PRESTATAIRE']; ?>" aria-label="" required>
               </div>
             </div>
           </div>
           <div class="form-input-max">
             <p class="form-text">Nom Prestataire :</p>
             <div class="form-input-wrapper flexbox-left">
               <i class="uil uil-user"></i>
               <input class="form-input" id="NOM_PRESTATAIRE" name="NOM_PRESTATAIRE" type="text" placeholder="Votre Nom" value="<?php echo $_SESSION['NOM_PRESTATAIRE']; ?>" required>
             </div>
           </div>
           <div class="form-input-max">
             <p class="form-text">Votre Email</p>
             <div class="form-input-wrapper flexbox-left">
               <i class="uil uil-at"></i>
               <input class="form-input" id="EMAIL_PRESTATAIRE" name="EMAIL_PRESTATAIRE" type="email" placeholder="Votre Email ..." value="<?php echo $_SESSION['EMAIL_PRESTATAIRE']; ?>" aria-label="" required>
             </div>
           </div>
           </div>
            <div class="form-input-max flexbox-left">
             <div class="button-wrapper">
               <button id="form-button" type="submit" class="button btn-primary"><i class="uil uil-envelope-heart"></i> Modifier<div class="btn-secondary"></div></button>
              </div>
            </div>
          </form>
         </div>

       </main>
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
           <p class="text-secondary">© Copyright 2020. All Rights Reserved.</p>
           <div class="">
                <a href="/#" class="mx-1">
                   <svg class="fill-current" width="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                      <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                         5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                         -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                         0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                         -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                         0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                         -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                         0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                         -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                         -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                         1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                         -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                         6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                         0.771,-0.67 1.054,-1.093Z"></path>
                   </svg>
                </a>
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


<script src="<?php echo base_url('assets/presta/js/jquery-1.12.4.min.js') ?>"></script>
<!--bootstrap js-->
<script src="<?php echo base_url('assets/presta/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/presta/js/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/presta/js/slick.min.js') ?>"></script>
<script src="<?php echo base_url('assets/presta/js/wow.min.js') ?>"></script>
<!--custom js-->
<script src="<?php echo base_url('assets/presta/js/custom.js') ?>"></script>
<script type="text/javascript">
$('#MOT_DE_PASS, #password').on('keyup', function () {
if ($('#MOT_DE_PASS').val() == $('#password').val()) {
  $('#message').html('Matching').css('color', 'green');
} else
  $('#message').html('Not Matching').css('color', 'red');
});
</script>

</body>
</html>
