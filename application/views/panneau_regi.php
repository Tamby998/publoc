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
<script src="<?php echo base_url('assets/test/js/lumino.glyphs.js') ?>"></script>
<style media="screen">
h2 {
font-family: "Poppins";
font-size: 36px;

margin-bottom: 15px;
}

h3 {
font-size: 24px;
font-weight: 500;
color: rgba(34, 34, 34, 0.5);

margin-bottom: 25px;
margin-top: 0px;
}

h3,
span,
p {
font-family: "Avenir";
}

.profile_container,
.info,
.back {
margin: 60px 100px 0px;
max-width: 900px;
display: flex;
overflow-x: hidden;
}

.back {
display: flex;
align-items: center;
color: rgba(34, 34, 34, 0.5);
}

.back i {
margin-right: 15px;
}

.profile_img-LG {
height: 400px;
width: 300px;
border-radius: 40px;

object-fit: cover;
object-position: 50% 50%;

background-position: 40% 50%;
}

.flag_wrapper {
width: 50px;
height: 50px;
background-color: #f2f2f2;
border-radius: 100%;
position: relative;
top: -70px;
left: 230px;
}

.flag {
width: 30px;
height: 30px;
position: absolute;
right: 0;
left: 0;
top: 0;
bottom: 0;
margin: auto auto;
}

.description {
margin-bottom: 30px;
margin-top: 0px;
}

.profile_img_section {
margin-right: 50px;
}

.profile_desc_section {
display: flex;
flex-direction: column;

margin-left: 50px;
}

.interests_item {
display: inline-block;
padding: 5px 15px;
margin-right: 7.5px;
margin-bottom: 10px;
line-height: 35px;
background-color: #e6e6e6;
border-radius: 5px;

color: rgba(34, 34, 34, 0.5);
}

.info {
margin-top: -20px;
margin-left: 100px;
}

.link_img_wrapper {
width: 40px;
height: 40px;
background-color: #f2f2f2;
border-radius: 10px;
position: relative;
}

.link_img {
height: 20px;
width: 20px;
position: absolute;
right: 0;
left: 0;
top: 0;
bottom: 0;
margin: auto auto;
}

ul {
padding: 0px;
}

li {
display: flex;
flex-direction: row;
align-items: center;
margin-bottom: 5px;
}

li p {
margin-left: 30px;
color: rgba(34, 34, 34, 0.5);
}

@media screen and (max-width: 1000px) {
.profile_container,
.info,
.back {
  margin: 60px 33px 0px;
}

.profile_container {
  flex-direction: column;
}

.profile_img_section {
  margin: 0 auto;
}

.profile_img-LG {
  width: 300px;
  height: 300px;
  border-radius: 100%;
}

.flag_wrapper {
}

.profile_desc_section {
  margin-left: 0px;
  margin-bottom: 10px;
  margin-top: -40px;
}

.info {
  margin-top: 10px;
  margin-left: 33px;
}
}

</style>
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

</head>

<body>
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
				<a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/regisseur_carte/<?php echo $_SESSION['ID_REGISSEUR']; ?>"><img  src="<?php echo base_url('assets/logo.jpg') ?>"  height="50px" width="50px"alt="">Pub'loc</a>
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

			<li class="parent active">
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


<li class="parent">
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
<li class="parent ">
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
				<li class="active"><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/regisseur_carte/<?php echo $_SESSION['ID_REGISSEUR']; ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>..Accueil</a></li>

			</ol>
		</div><!--/.row-->


		<div class="row">
      <span class="back">
      <a class="btn" href="<?php echo base_url() ?>index.php/RegisseurControlleur/list/<?php echo $_SESSION['ID_REGISSEUR']; ?>">Retour</a>
</span>

<section class="profile_container">
  <div class="profile_img_section">
    <img class="profile_img-LG" src="<?php echo base_url('upload/') ?><?php echo $panneau->image_panneau; ?>" />
    <div class="flag_wrapper">
    </div>
  </div>

  <div class="profile_desc_section">
    <h2>ID : <?php echo $panneau->ID_PANNEAU; ?></h2>
    <h3>Description</h3>
    <p class="description"><?php echo $panneau->DESCRIPTION; ?>.</p>

    <div class="interests">
      <span class="interests_item">Face :<?php echo $panneau->TYPE; ?></span>
      <span class="interests_item">Service :<?php echo $panneau->SERVICE; ?></span>
      <span class="interests_item">Ville :<?php echo $panneau->VILLE; ?></span>
      <span class="interests_item">Adresse :<?php echo $panneau->ADRESSE; ?></span>

      <span class="interests_item">Face: <?php echo $panneau->FACE; ?></span>
      <span class="interests_item">Lumiere :<?php echo $panneau->LUMIERE; ?></span>
      <span class="interests_item"><?php echo $panneau->ADRESSE; ?></span>

      <span class="interests_item">Largeur :<?php echo $panneau->LARGEUR; ?></span>
      <span class="interests_item">Longueur :<?php echo $panneau->LONGUEUR; ?></span>
      <span class="interests_item">Longitude :<?php echo $panneau->LOGITUDE; ?></span>
      <span class="interests_item">Latitude :<?php echo $panneau->LATITUDE; ?></span>
      <span class="interests_item">Ref :<?php echo $panneau->REFERENCE; ?></span>
    </div>
    <h3>Emplacement Gerer par :</h3>
    <?php $gerer = $panneau->gerer; ?>
    <?php if ($gerer == 0){ ?>
      <div class="description">
        <?php echo $_SESSION['ENTREPRISE']; ?>
      </div>
    <<?php }else { ?>
      <div class="description">
        Wellcomm
      </div>
    <?php } ?>>
  </div>

</section>

<div class="info">
  <ul>
    <li>
      <div class="link_img_wrapper">
        <img class="link_img" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/apple/271/round-pushpin_1f4cd.png" alt="">
      </div>
      <p><?php echo $panneau->HABILLAGE; ?></p>
    </li>
    <li>
      <div class="link_img_wrapper">
        <img class="link_img" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/apple/271/speaking-head_1f5e3-fe0f.png" alt="">
      </div>
      <p>Info : <?php echo $panneau->INFO; ?>, Mot Cles : <?php echo $panneau->MOT_CLES; ?></p>
    </li>
  </ul>
</div>
	</div>	<!--/.main-->
</div>

	<script src="<?php echo base_url('assets/test/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap-datepicker.js') ?>"></script>
</body>

</html>
