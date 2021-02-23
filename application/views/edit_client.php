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

      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
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

       <main class="flexbox-col">

         <div class="form-wrapper">
           <form id="form" method="post" name="emailform" action="<?php echo base_url() ?>index.php/ClientControlleur/update">
             <h3 class="form-title">Modifier Profile</h3>
             <div class="form-input-grid">
               <input type="hidden" name="txt_hidden" value="<?php echo $_SESSION['ID_CLIENT2']; ?>">
               <div>
                 <p class="form-text">Nom</p>
                 <div class="form-input-wrapper flexbox-left">
                   <i class="uil uil-user"></i>
                   <input class="form-input" id="NOM_CLIENT" name="NOM_CLIENT" type="text" placeholder="Votre Nom" value="<?php echo $_SESSION['NOM_CLIENT']; ?>" required>
                 </div>
               </div>
               <div>
                 <p class="form-text">Prenom</p>
                 <div class="form-input-wrapper flexbox-left">
                   <i class="uil uil-user"></i>
                   <input class="form-input" id="PRENOM_CLIENT" name="PRENOM_CLIENT" type="text" placeholder="Votre Prenom" value="<?php echo $_SESSION['PRENOM_CLIENT']; ?>" required>
                 </div>
               </div>
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
               <p class="form-text">Votre Adresse</p>
               <div class="form-input-wrapper flexbox-left">
                 <i class="uil uil-asterisk"></i>
                 <input class="form-input" id="ADRESSE_CLIENT" name="ADRESSE_CLIENT" type="text" placeholder="Adresse ..." value="<?php echo $_SESSION['ADRESSE_CLIENT']; ?>" aria-label="" required>
               </div>
             </div>
               <div>
               <p class="form-text">Votre Contact</p>
               <div class="form-input-wrapper flexbox-left">
                 <i class="uil uil-asterisk"></i>
                 <input class="form-input" id="NUM_CLIENT" name="NUM_CLIENT" type="text" placeholder="Votre Contact..." value="<?php echo $_SESSION['NUM_CLIENT']; ?>" aria-label="" required>
               </div>
             </div>
           </div>
           <div class="form-input-max">
             <p class="form-text">Votre Email</p>
             <div class="form-input-wrapper flexbox-left">
               <i class="uil uil-at"></i>
               <input class="form-input" id="EMAIL_CLIENT" name="EMAIL_CLIENT" type="email" placeholder="Votre Email ..." value="<?php echo $_SESSION['EMAIL_CLIENT']; ?>" aria-label="" required>
             </div>
           </div>
           </div>
            <div class="form-input-max flexbox-left">
             <div class="button-wrapper">
               <button id="form-button" type="submit" class="button btn-primary"><i class="uil uil-envelope-heart"></i> Send<div class="btn-secondary"></div></button>
              </div>
            </div>
          </form>
         </div>

       </main>
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
