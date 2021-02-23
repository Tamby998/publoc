<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Publoc - Regisseur</title>

<link href="<?php echo base_url('assets/test/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/test/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/test/css/styles.css') ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/font-awesome.min.css') ?>">
<!--bootstrap css-->

<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/animate-wow.css') ?>">
<!--main css-->
<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/slick.min.css') ?>">
<!--responsive css-->
<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/responsive.css') ?>">
<!--Icons-->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3rbkk5MwXeZqcnCumsrms90lztTEp4LM&callback=initMap&libraries=&v=weekly"
defer
></script>
<script src="<?php echo base_url('assets/test/js/lumino.glyphs.js') ?>"></script>
<script type="text/javascript">
 	function date_heure(id){
         date = new Date;
         annee = date.getFullYear();
         moi = date.getMonth();
         mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
         j = date.getDate();
         jour = date.getDay();
         jours = new Array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
         h = date.getHours();
         if(h<10)
            {
             h = "0"+h;
         }
            m = date.getMinutes();
         if(m<10)
         {
         m = "0"+m;
            }
         s = date.getSeconds();
         if(s<10)
         {
                s = "0"+s;
         }
         resultat ='<span class="date">' +jours[jour]+' '+j+' '+mois[moi]+' '+annee+'</span>'+'<br><br>'+'<span class="heure">'+h+':'+m+':'+s+'</span>';
         document.getElementById(id).innerHTML = resultat;
         setTimeout('date_heure("'+id+'");','1000');
         return true;
     }
 </script>

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

<body onload="initialize( -18.77719249999,46.8543280000)">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/regisseur_carte/<?php echo $_SESSION['ID_REGISSEUR']; ?>"><span>Publoc</span>Regisseur</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('assets/logo.jpg') ?>" class="profile" alt="User Image"> <?php echo $_SESSION['ENTREPRISE']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Se deconnecter</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/regisseur_carte/<?php echo $_SESSION['ID_REGISSEUR'];  ?>"><img  src="<?php echo base_url('assets/logo.jpg') ?>"  height="50px" width="50px"alt="">Pub'loc</a>
			</div>
			<div id="div_horloge">
            	<center>
            		<span id="date_heure"></span>
            		<script type="text/javascript">window.onload = date_heure('date_heure');</script>
            	</center>
            </div>
		</form>
		<ul class="nav menu">
			<li class="#"><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/regisseur_carte/<?php echo $_SESSION['ID_REGISSEUR']; ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Accueil</a></li>

			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Mes Emplacement <span id="espace" class="glyphicon glyphicon-chevron-down"></span></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="<?php echo base_url() ?>index.php/RegisseurControlleur/ajout_panneau">
							<span class="glyphicon glyphicon-plus"></span> Ajout
						</a>
					</li>
          <li>
            <a class="" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/list_panneau_reserver/<?php echo $_SESSION['ID_REGISSEUR']; ?>">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg> Reservation
            </a>
          </li>
					<li>
						<a class="" href="<?php echo base_url() ?>index.php/RegisseurControlleur/list/<?php echo $_SESSION['ID_REGISSEUR']; ?>">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Liste
						</a>
					</li>
				</ul>
			</li>

      <li class="#"><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/list_demande"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg> Demande Client</a></li>


<li class="parent active">
  <a href="#">
    <span data-toggle="collapse" href="#sub-item-C"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Profile
    <span id="espace" class="glyphicon glyphicon-chevron-down"></span>
    </span>
  </a>
  <ul class="children collapse" id="sub-item-C">
    <li>
      <a class="" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/profile">
        <span class="glyphicon glyphicon-plus"></span> Profile
      </a>
    </li>
    <li>
      <a class="" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/edit">
        <span class="glyphicon glyphicon-tags"></span> Modifier Profile
      </a>
    </li>
  </ul>
</li>
<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked internal hard drive"><use xlink:href="#stroked-internal-hard-drive"/></svg> Nos Tarifs <span id="espace" class="glyphicon glyphicon-chevron-down"></span> </span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/abonnement">
							<span class="glyphicon glyphicon-download-alt"></span> Abonnement
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/tarif">
							<span class="glyphicon glyphicon-stats"></span> Tarif de Verification
						</a>
					</li>
				</ul>
</li>


	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active"><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>..Accueil</a></li>

			</ol>
		</div><!--/.row-->


    <div class="row">


      <main class="flexbox-col">

        <div class="form-wrapper">
          <form id="form" method="post" name="emailform" action="<?php echo base_url() ?>index.php/homeRegisseurControlleur/update">
            <h3 class="form-title">Modifier Profile</h3>
            <div class="form-input-grid">
              <input type="hidden" name="txt_hidden" value="<?php echo $_SESSION['ID_REGISSEUR']; ?>">
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
                <input class="form-input" id="ADRESSE" name="ADRESSE" type="text" placeholder="Adresse ..." value="<?php echo $_SESSION['ADRESSE']; ?>" aria-label="" required>
              </div>
            </div>
              <div>
              <p class="form-text">Votre Contact</p>
              <div class="form-input-wrapper flexbox-left">
                <i class="uil uil-asterisk"></i>
                <input class="form-input" id="CONTACT_REGISSEUR" name="CONTACT_REGISSEUR" type="text" placeholder="Votre Contact..." value="<?php echo $_SESSION['CONTACT_REGISSEUR']; ?>" aria-label="" required>
              </div>
            </div>
          </div>
          <div class="form-input-max">
            <p class="form-text">Entreprise :</p>
            <div class="form-input-wrapper flexbox-left">
              <i class="uil uil-user"></i>
              <input class="form-input" id="ENTREPRISE" name="ENTREPRISE" type="text" placeholder="Votre Nom" value="<?php echo $_SESSION['ENTREPRISE']; ?>" required>
            </div>
          </div>
          <div class="form-input-max">
            <p class="form-text">Votre Email</p>
            <div class="form-input-wrapper flexbox-left">
              <i class="uil uil-at"></i>
              <input class="form-input" id="EMAIL_REGISSEUR" name="EMAIL_REGISSEUR" type="email" placeholder="Votre Email ..." value="<?php echo $_SESSION['EMAIL_REGISSEUR']; ?>" aria-label="" required>
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


    </div>
	</div>	<!--/.main-->

	<script src="<?php echo base_url('assets/test/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap-datepicker.js') ?>"></script>
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
