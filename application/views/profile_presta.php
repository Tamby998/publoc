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
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:wght@400;500;600;700&display=swap');

body {
background-color: #f0f0f0;
font-family: 'Quicksand', sans-serif;
}

main {
padding: 32px;
}

section {
display: flex;
justify-content: center;
}

.card {
display: inline-block;
background-color: #ffffff;
margin: 24px;
padding: 16px;
width: 312px;
min-width: 288px;
box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.04);
border-radius: 8px;
transition: .4s;
}

.card:hover {
box-shadow: none;

.card-image {
  transform: translateX(0px);
  box-shadow: none;
}
}

.card-image {
width: 100%;
height: 256px;
border-radius: 8px;
position: relative;
transform: translateX(-32px);
box-shadow: 16px 4px 24px 0 rgba(0, 0, 0, 0.2);
transition: .4s;
object-fit: cover;
}

.card-body {
padding: 8px;
}

.card-title {
font-size: 32px;
margin: 12px 0;
transition: .4s;
font-family: 'DM Serif Display', serif;
font-weight: 600;
letter-spacing: 2px;
}

.card-content {
font-size: 14px;
margin-bottom: 8px;
}
</style>

         </head>
         <body onload="initialize( -18.77719249999,46.8543280000)">
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
            <br><br>



            <div class="container">
              <div class="profile-header">
                <div class="profile-img">
                  <img src="<?php echo base_url() ?>upload/<?php echo $prestataires->logo_prestataire; ?>" width="200" alt="Profile Image">
                </div>
                <div class="profile-nav-info">
                  <!--<img src="<?php echo base_url() ?>upload/<?php echo $recuperation_fiche->photo_coverture; ?>" >-->

                  <h3 class="user-name"><?php echo $prestataires->NOM_PRESTATAIRE; ?></h3>
                  <div class="address">
                    <p id="state" class="state"><?php echo $prestataires->TYPE_ABONNEMENT; ?></p>
                  </div>

                </div>
                <div class="profile-option">
                  <div class="notification">
                    <i class="fa fa-bell"></i>
                    <span class="alert-message"></span>
                  </div>
                </div>
              </div>

              <div class="main-bd">
                <div class="left-side">
                  <div class="profile-side">
                    <p class="mobile-no"><i class="fa fa-phone"></i> <?php echo $prestataires->CONTACT_PRESTATAIRE; ?></p>
                    <p class="user-mail"><i class="fa fa-envelope"></i> <?php echo $prestataires->EMAIL_PRESTATAIRE; ?></p>
                    <!--<div class="profile-btn">
                      <button class="chatbtn" id="chatBtn"><i class="fa fa-comment"></i> Chat</button>
                      <button class="createbtn" id="Create-post"><i class="fa fa-plus"></i> Create</button>
                    </div>-->
                    <div class="user-rating">
                      <!--<h3 class="rating">4.5</h3>-->
                      <div class="rate">
                        <div class="star-outer">
                          <div class="star-inner">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <span class="no-of-user-rate"><span></span>&nbsp;&nbsp;</span>
                      </div>

                    </div>
                  </div>

                </div>
                <div class="right-side">

                  <div class="nav">
                    <ul>
                      <li onclick="tabs(0)" class="user-post active">Description</li>
                      <li onclick="tabs(1)" class="user-review">Realisation</li>
                      <!--<li onclick="tabs(2)" class="user-setting"> Service</li>-->
                    </ul>
                  </div>
                  <div class="profile-body">
                    <div class="profile-posts tab">
                      <h1>Description</h1>
                      <p><?php echo $recuperation_fiche->description; ?></p>
                      <h1>service</h1>
                      <p><?php echo $recuperation_fiche->service; ?>.</p>
                      <h1>Equipe</h1>
                      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>  <?php echo $recuperation_fiche->nbre; ?>  personnes dans leur équipe.</p>
                    </div>
                    <div class="profile-reviews tab">
                      <?php if((sizeof($realisations))>0){
                      foreach($realisations as $info){
                      ?>
                      <div class="card">
                            <img class="card-image" src="<?php echo base_url(); ?>upload/<?php echo $info->nom_image; ?>" />
                            <div class="card-body">
                              <p class="card-content"><?php echo $info->description; ?>.</p>
                            </div>
                          </div>
                          <?php
                          }
                          }else{ ?>
                            <h1>Aucun Realisation!</h1>
                          <?php } ?>
                    </div>
                    <!--
                    <div class="profile-settings tab">
                      <div class="account-setting">

                      </div>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>



<br><br><br><br><br><br><br><br>

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
                  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                  <style media="screen">


                  .profile-header {
                    background: #fff;
                    width: 500%;
                    display: flex;
                    height: 190px;
                    position: relative;
                    box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.2);
                  }

                  .profile-img {
                    float: left;
                    width: 340px;
                    height: 200px;
                  }

                  .profile-img img {
                    border-radius: 50%;
                    height: 230px;
                    width: 230px;
                    border: 5px solid #fff;
                    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                    position: absolute;
                    left: 50px;
                    top: 20px;
                    z-index: 5;
                    background: #fff;
                  }

                  .profile-nav-info {
                    float: left;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    padding-top: 60px;
                  }

                  .profile-nav-info h3 {
                    font-variant: small-caps;
                    font-size: 2rem;
                    font-family: sans-serif;
                    font-weight: bold;
                  }

                  .profile-nav-info .address {
                    display: flex;
                    font-weight: bold;
                    color: #777;
                  }

                  .profile-nav-info .address p {
                    margin-right: 5px;
                  }

                  .profile-option {
                    width: 40px;
                    height: 40px;
                    position: absolute;
                    right: 50px;
                    top: 50%;
                    transform: translateY(-50%);
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    transition: all 0.5s ease-in-out;
                    outline: none;
                    background: #e40046;
                  }

                  .profile-option:hover {
                    background: #fff;
                    border: 1px solid #e40046;
                  }
                  .profile-option:hover .notification i {
                    color: #e40046;
                  }

                  .profile-option:hover span {
                    background: #e40046;
                  }

                  .profile-option .notification i {
                    color: #fff;
                    font-size: 1.2rem;
                    transition: all 0.5s ease-in-out;
                  }

                  .profile-option .notification .alert-message {
                    position: absolute;
                    top: -5px;
                    right: -5px;
                    background: #fff;
                    color: #e40046;
                    border: 1px solid #e40046;
                    padding: 5px;
                    border-radius: 50%;
                    height: 20px;
                    width: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 0.8rem;
                    font-weight: bold;
                  }

                  .main-bd {
                    width: 100%;
                    display: flex;
                    padding-right: 15px;
                  }

                  .profile-side {
                    width: 300px;
                    background: #fff;
                    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
                    padding: 90px 30px 20px;
                    font-family: "Bree Serif", serif;
                    margin-left: 10px;
                    z-index: 99;
                  }

                  .profile-side p {
                    margin-bottom: 7px;
                    color: #333;
                    font-size: 14px;
                  }

                  .profile-side p i {
                    color: #e40046;
                    margin-right: 10px;
                  }

                  .mobile-no i {
                    transform: rotateY(180deg);
                    color: #e40046;
                  }

                  .profile-btn {
                    display: flex;
                  }

                  button.chatbtn,
                  button.createbtn {
                    border: 0;
                    padding: 10px;
                    width: 100%;
                    border-radius: 3px;
                    background: #e40046;
                    color: #fff;
                    font-family: "Bree Serif";
                    font-size: 1rem;
                    margin: 5px 2px;
                    cursor: pointer;
                    outline: none;
                    margin-bottom: 10px;
                    transition: background 0.3s ease-in-out;
                    box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.3);
                  }

                  button.chatbtn:hover,
                  button.createbtn:hover {
                    background: rgba(288, 0, 70, 0.9);
                  }

                  button.chatbtn i,
                  button.createbtn i {
                    margin-right: 5px;
                  }

                  .user-rating {
                    display: flex;
                  }

                  .user-rating h3 {
                    font-size: 2.5rem;
                    font-weight: 200;
                    margin-right: 5px;
                    letter-spacing: 1px;
                    color: #666;
                  }

                  .user-rating .no-of-user-rate {
                    font-size: 0.9rem;
                  }

                  .rate {
                    padding-top: 6px;
                  }

                  .rate i {
                    font-size: 0.9rem;
                    color: rgba(228, 0, 70, 1);
                  }

                  .nav {
                    width: 100%;
                    z-index: -1;
                  }

                  .nav ul {
                    display: flex;
                    justify-content: space-around;
                    list-style-type: none;
                    height: 40px;
                    background: #fff;
                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
                  }

                  .nav ul li {
                    padding: 10px;
                    width: 100%;
                    cursor: pointer;
                    text-align: center;
                    transition: all 0.2s ease-in-out;
                  }

                  .nav ul li:hover,
                  .nav ul li.active {
                    box-shadow: 0px -3px 0px rgba(288, 0, 70, 0.9) inset;
                  }

                  .profile-body {
                    width: 100%;
                    z-index: -1;
                  }

                  .tab {
                    display: none;
                  }

                  .tab {
                    padding: 20px;
                    width: 100%;
                    text-align: center;
                  }

                  @media (max-width: 1100px) {
                    .profile-side {
                      width: 250px;
                      padding: 90px 15px 20px;
                    }

                    .profile-img img {
                      height: 200px;
                      width: 200px;
                      left: 50px;
                      top: 50px;
                    }
                  }

                  @media (max-width: 900px) {
                    body {
                      margin: 0 20px;
                    }

                    .profile-header {
                      display: flex;
                      height: 100%;
                      flex-direction: column;
                      text-align: center;
                      padding-bottom: 20px;
                    }

                    .profile-img {
                      float: left;
                      width: 100%;
                      height: 200px;
                    }

                    .profile-img img {
                      position: relative;
                      height: 200px;
                      width: 200px;
                      left: 0px;
                    }

                    .profile-nav-info {
                      text-align: center;
                    }

                    .profile-option {
                      right: 20px;
                      top: 75%;
                      transform: translateY(50%);
                    }

                    .main-bd {
                      flex-direction: column;
                      padding-right: 0;
                    }

                    .profile-side {
                      width: 100%;
                      text-align: center;
                      padding: 20px;
                      margin: 5px 0;
                    }

                    .profile-nav-info .address {
                      justify-content: center;
                    }

                    .user-rating {
                      justify-content: center;
                    }
                  }


                    .profile-header h3 {
                    }

                    .profile-option {
                      width: 30px;
                      height: 30px;
                      position: absolute;
                      right: 15px;
                      top: 83%;
                    }

                    .profile-option .notification .alert-message {
                      top: -3px;
                      right: -4px;
                      padding: 4px;
                      height: 15px;
                      width: 15px;
                      font-size: 0.7rem;
                    }

                    .profile-nav-info h3 {
                      font-size: 1.9rem;
                    }

                    .profile-nav-info .address p,
                    .profile-nav-info .address span {
                      font-size: 0.7rem;
                    }
                  }
                  #see-more-bio,
                  #see-less-bio {
                    color: blue;
                    cursor: pointer;
                    text-transform: lowercase;
                  }
                  .tab h1 {
                    font-family: "Bree Serif", sans-serif;
                    display: flex;
                    justify-content: center;
                    margin: 20px auto;
                  }

                  </style>
                  <script type="text/javascript">
                  $(".nav ul li").click(function() {
$(this)
  .addClass("active")
  .siblings()
  .removeClass("active");
});

const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
tab.forEach(function(node) {
  node.style.display = "none";
});
tab[panelIndex].style.display = "block";
}
tabs(0);

let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
bio.oldText = bio.innerText;

bio.innerText = bio.innerText.substring(0, 100) + "...";
bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
//        console.log(bio.innerText)

bioText();

function addLength() {
bio.innerText = bio.oldText;
bio.innerHTML +=
  "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
document.getElementById("see-less-bio").addEventListener("click", () => {
  document.getElementById("see-less-bio").style.display = "none";
});
}
if (document.querySelector(".alert-message").innerText > 9) {
document.querySelector(".alert-message").style.fontSize = ".7rem";
}

                  </script>
               </body>
            </html>
