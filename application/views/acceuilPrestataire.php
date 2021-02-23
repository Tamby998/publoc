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
      @import url('https://fonts.googleapis.com/css?family=Open+Sans|Prata&display=swap');
$font-titulo:'Open Sans', sans-serif;
$font-body:'Prata', serif;

%small-button{
width:25px;
height:25px;
}
%btn-redondo{
width:25px;
height:25px;
border-radius:50%;
}
%center-all-flex{
display: flex;
flex-flow:column;
justify-content:center;
align-content:center;
}
%ui-kit{
cursor:pointer;
transition:all 200ms;
outline:none;
}

body{
background: #EB4962;
}
.Container{
background: #fff;
@extend %center-all-flex;
margin: 2em;
padding: 1em;
border-radius:5px;
}
.Container__cabecalho{
text-align:center;
background: whitesmoke;
padding: 10px;
>.Cabecalho__avatar{
  width:80px;
  height:80px;
  border:double 2px #37B8AF;
  padding: 2px;
  border-radius:50%;
}
>.Cabecalho__nome{
  font-family:$font-titulo;
  font-weight:800;
  text-transform:capitalize;
  color:#333;
}
}
.Cabecalho__fotoCapa{
.FotoCapa__icon{
  @extend %ui-kit,%small-button;
  float:right;
  >svg{
    fill:rgba(0,0,0,0.2);
    &:hover{
      fill:#333;
    }
  }
}
}
.Container__body{
 @extend %center-all-flex;
}
.Body__gamePoints{
text-align: center;
margin: 1em;
font-family:$font-body;
color:#7d7d7d;
.GamePoints__h3{
   font-size:10px;
}
>.GamePoints__topCabecalho{
  font-family:$font-titulo;
  color:#333;
  font-weight:700;
  text-align:left;
  margin: 16px;
  font-size:12px;
}
>.GamePoints__description{
  text-align:left;
  line-height:20px;
  margin: 1.5em;
   font-size:13px;
}
}
.GamePoints__wrapperTop{
display: flex;
flex-flow:row wrap;
>.GamePoints__adiciona{
  width:25px;
  height:25px;
  border-radius:50%;
  border:none;
  margin: 3px;
  background: #37B8AF;
  @extend %ui-kit;
  &:hover{
    transform:rotate(45deg);
    box-shadow:4px 0px 2px 0px rgba(0,0,0,.2);
  }
}
>.GamePoints__topStories{
  text-align:center;
  margin: 5px;
  font-family:$font-titulo;
  background: darken(whitesmoke,5%);
  font-size:12px;
  text-transform:capitalize;
  padding: 5px;
  border-radius:25px;
}
}
.Container__footer{
 @extend %center-all-flex;
>.Container__buttonConectar{
  background: #37B8AF;
  border:none;
  font-family:$font-titulo;
  padding: 5px;
  border-radius:5px;
  color:whitesmoke;
  @extend %ui-kit;
  &:hover{
    background: darken(#37B8AF,10%);
  }
}
}
.Container__models{
opacity:0;
background: #fff;
position: absolute;
z-index:99;
width:70%;
margin-left:auto;
margin-right:auto;
padding:.5em;
border: 1px solid lighten(#1238CC,40%);
border-radius:5px;
> .Container__closeBtn{
  position: relative;
  margin-top: 0;
  float:right;
}
}
.closeBtn--activeClose{
background: darken(#FF3D00, 10%);
@extend %btn-redondo;
border:none;
box-shadow:2px 2px 2px 0px rgba(0,0,0,.2);
color:#fff;
}
.Container__bodyModal{

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

      <div class="Container">
        <div class="Container__cabecalho">
          <img src="https://www.cime-competences.fr/wp-content/uploads/2018/09/Module1-1.png" height="150px" width="130" class="Cabecalho__avatar Cabecalho__avatar--bordaAtiva" alt="">
          <h2 class="Cabecalho__nome"><i class="fa fa-user-circle" aria-hidden="true"><?php echo $_SESSION['NOM_PRESTATAIRE']; ?> </i></h2>
        </div>
        <div class="Container__body">
          <div class="Body__gamePoints">
            <h3 class="GamePoints__h3"><i class="fa fa-phone" aria-hidden="true"><?php echo $_SESSION['CONTACT_PRESTATAIRE']; ?></i> <small>  </small></h3><br>
            <h3 class="GamePoints__h3"><i class="fa fa-envelope" aria-hidden="true"><?php echo $_SESSION['EMAIL_PRESTATAIRE']; ?></i> <small>  </small></h3><br>

          </div>
        </div>
        <center>
          <a href="<?php echo base_url() ?>index.php/homePrestataireControlleur/edit" class="btn btn-primary">Modifier Profile</a>
        </center>
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
