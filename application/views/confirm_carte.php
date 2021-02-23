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
    @import url(https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,531;1,600;1,700;1,800;1,900&display=swap);

    html {
      font-family: Jost, sans-serif;
      color: #5756a2;
    }
    #form {
      max-width: 100%;
      margin: 3.125rem;
      background: #f1f9fe;
      box-shadow: 0 0.313rem 3.875rem 0 rgba(0, 0, 0, 0.19);
      border-radius: 1.25rem;
      font-size: 1.25rem;
      font-weight: 500;
    }
    #form #title, #form #description {
      text-align: center;
    }
    #form #title {
      padding-top: 3.125rem;
      font-size: 3.125rem;
      font-weight: 700;
      margin: 0;
    }
    #form #description {
      font-size: 2.063rem;
      font-weight: 300;
      line-height: 1.2;
      margin: 1.25rem;
    }
    #survey-form {
      margin: 3.125rem 6.25rem 0 6.25rem;
    }
    #survey-form .form-gp {
      margin: 0 0 1.75rem;
      padding: 0.25rem;
    }
    #survey-form .form-gp p {
      padding-left: 0.5rem;
      margin: 0;
    }
    #survey-form label .italic {
      font-style: italic;
      font-size: 1rem;
      font-weight: 400;
    }
    #survey-form input, #survey-form select, textarea {
      width: 95%;
      height: 3rem;
      margin-left: 0.5rem;
      padding-left: 0.5rem;
      border-radius: 0.188rem;
      color: #5756a2;
      background-color: #ddeef9;
      border: 0.125rem solid #ddeef9;
      font-size: 1.25rem;
      font-weight: 500;
    }
    input:focus, #survey-form input:focus, textarea:focus {
      outline: 0;
      background-color: transparent;
      border-color: #5756a2;
      border: 0 0 0 0.2rem rgba(87,86,162,.25);
    }
    ::placeholder {
      color: #5756a2;
    }
    input[type='radio'], #survey-form input[type='radio'] {
      width: 1.25rem;
      height: 1.25rem;
    }
    #survey-form .row .col-md-4 label {
      margin-right: 1.875rem;
    }
    #survey-form .row .col-md-4 span {
      position: relative;
      top: -1.9px;
    }
    put[type='checkbox'], #survey-form input[type='checkbox'] {
      width: 1.25rem;
      height: 1.25rem;
    }
    ul li {
      list-style: none;
    }
    .form-gp .items li {
      width: 50%;
      float: left;
    }
    .form-gp #textarea-label p {
      margin-top: 10.625rem;
    }


    #footer .action input, .action input {
      height: 3.094rem;
      width: 11.25rem;
      color: #fff;
      fill: #fff;
      background-color: red;
      cursor: pointer;

    }
    .action button svg {
      width: 1rem;
      top: 0.25rem;
      color: #fff;
      right: -1.5rem !important;
      left: inherit !important;
      position: relative;
    }
    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }
    @media screen and (max-width: 1050px){
      #footer .footer-img img {
        max-width: 90%;
      }
    }
    @media screen and (max-width: 991px){
      #survey-form {
        margin: 3.125rem 3.5rem 0 3.5rem;
      }
      #footer .action {
        position: static;
        margin-top: 3.125rem;
      }
    }
    @media screen and (max-width: 850px){
      #survey-form .form-gp p {
        padding-left: 1rem;
      }
      #survey-form input, #survey-form select, textarea {
        width: 90%;
        margin-left: 1rem;
      }
    }
    @media screen and (max-width: 767px) {
      #form {
        margin: 2rem;
      }
      #survey-form {
        margin: 3.125rem 2rem 0 2rem;
      }
      #form #title {
        font-size: 2.25rem;
      }
      #form #description {
        font-size: 1.625rem;
        margin: 0 0.625rem;
      }
      #footer .footer-img {
        left: -2.5rem;
      }
      #footer .footer-img img {
        max-width: 80%;
      }
    }
    @media screen and (max-width: 667px) {
      .form-gp .items li {
        width: 100%;
      }
      .form-gp .items li:last-child {
        margin-bottom: 1rem;
    }
    @media screen and (max-width: 600px) {
      #form {
        margin: 0;
      }
      #survey-form {
        margin: 3.125rem 0rem 0 0rem;
      }
      #form #title {
        font-size: 1.5em;
        line-height: 1;
      }
      #footer .footer-img {
        left: -0.5rem;
      }
    }
    @media screen and (max-width: 510px) {
      #dropdown-label .aling {
        margin: 0 1rem;
        text-align: left;
      }
      #footer {
        min-height: 20rem;
      }
    }
    @media screen and (max-width: 460px) {
      #form #description {
        font-size: 1.125rem;
      }
    }
    @media screen and (max-width: 320px){
      #footer {
        min-height: 15rem;
      }
    }
    @media (min-width: 768px) {
      .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }
      #survey-form {
        max-width: 46.875rem;
      }
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

    <div id="form">
      <h1 id="title">Confirmer la Reservation</h1>
        <p id="description"></p>

        <form action="<?php echo base_url() ?>index.php/homeClientControlleur/insert_carte" method="post" id="survey-form">
          <div id="footer">
          <div class="action">
            <center>
            <input type="submit" name="btn_update" value="Confirmer" class="btn btn-info">
              <!--<button type="submit" id="btn_save" name="btn_save" class="btn btn-success">Enregistrer</button>
              <button type="reset" id="" name="" onClick="reload()" class="btn btn-primary">Annuler</button>-->
            </center>
          </div>
        </div>
          <input type="hidden" name="txt_hidden" id="id_carte" value="id_carte">
            <input type="hidden" name="ID_CLIENT2" id="id_carte" value="<?php echo $_SESSION['ID_CLIENT2']; ?>">
          <div class="form-gp">
            <label id="email-label"><p>Votre Nom :</p></label>
            <select class="form-control" name="NOM_CLIENT" id="NOM_CLIENT" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $_SESSION['NOM_CLIENT']; ?>"><?php echo $_SESSION['NOM_CLIENT']; ?></option>
            </select>
          </div>
          <div class="form-gp">
            <label id="email-label"><p>Votre Prenom :</p></label>
            <select class="form-control" name="PRENOM_CLIENT" id="PRENOM_CLIENT" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $_SESSION['PRENOM_CLIENT']; ?>"><?php echo $_SESSION['PRENOM_CLIENT']; ?></option>
            </select>
          </div>
            <input type="hidden" name="ID_PANNEAU" id="ID_PANNEAU" value="<?php echo $carte->ID_PANNEAU; ?>">
          <div class="form-gp">
            <label id="email-label"><p>Type Panneau :</p></label>
            <select class="form-control" name="TYPE" id="TYPE" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $carte->TYPE; ?>"><?php echo $carte->TYPE; ?></option>
            </select>
          </div>
          <div class="form-gp">
            <label id="email-label"><p>Service :</p></label>
            <select class="form-control" name="SERVICE" id="SERVICE" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $carte->SERVICE; ?>"><?php echo $carte->SERVICE; ?></option>
            </select>
          </div>
            <input type="hidden" name="FACE" id="FACE" value="<?php echo $carte->FACE; ?>">
            <input type="hidden" name="LUMIERE" id="LUMIERE" value="<?php echo $carte->LUMIERE; ?>">

            <input type="hidden" name="PERIODE" id="PERIODE" value="<?php echo $carte->INFO; ?>">

            <input type="hidden" name="LARGEUR" id="LARGEUR" value="<?php echo $carte->LARGEUR; ?>">

            <input type="hidden" name="LONGUEUR" id="LONGUEUR" value="<?php echo $carte->LONGUEUR; ?>">
              <input type="hidden" name="LOGITUDE" id="LOGITUDE" value="<?php echo $carte->LOGITUDE; ?>">


            <input type="hidden" name="LATITUDE" id="LATITUDE" value="<?php echo $carte->LATITUDE; ?>">

          <div class="form-gp">
            <label id="email-label"><p>Ville :</p></label>
            <select class="form-control" name="VILLE" id="VILLE" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $carte->VILLE; ?>"><?php echo $carte->VILLE; ?></option>
            </select>
          </div>
          <div class="form-gp">
            <label id="email-label"><p>Quartier :</p></label>
            <select class="form-control" name="QUARTIER" id="QUARTIER" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $carte->ADRESSE; ?>"><?php echo $carte->ADRESSE; ?></option>
            </select>
          </div>
          <div class="form-gp">
            <label id="email-label"><p>Habillage :</p></label>
            <select class="form-control" name="HABILLAGE" id="HABILLAGE" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $carte->HABILLAGE; ?>"><?php echo $carte->HABILLAGE; ?></option>
            </select>
          </div>

            <input type="hidden" name="ID_REGISSEUR" id="ID_REGISSEUR" value="<?php echo $carte->ID_REGISSEUR; ?>">




        </form>
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
