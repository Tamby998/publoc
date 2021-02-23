<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Liste des Panneaux</title>

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

<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/bootstrap-select.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/slick.min.css') ?>">
<!--responsive css-->
<link rel="stylesheet" href="<?php echo base_url('assets/presta/css/responsive.css') ?>">




<style media="screen">
.table__head{
color: #FFF;
font-weight: 700;
background: #9b4085;
background: -moz-linear-gradient(-45deg, #9b4085 0%, #608590 100%);
background: -webkit-linear-gradient(-45deg, #9b4085 0%,#608590 100%);
background: linear-gradient(135deg, #9b4085 0%,#608590 100%);
white-space: nowrap;
}
.table-bordered td, .table-bordered th{
border: 0px solid #FFF;
}
.coin {
width:8%;
margin-left: 5px;
-webkit-animation:spin 4s linear infinite;
-moz-animation:spin 4s linear infinite;
animation:spin 4s linear infinite;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

.winner__table{
white-space: nowrap;
}

@media screen and (max-width: 567px) {

.winner__table{
font-size: 12px;
}
.coin {
width:15%;
margin-left:2px;
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
				<a class="navbar-brand" href="#"><span>Publoc</span> Regisseur</a>
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
				<a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur"><img  src="<?php echo base_url('assets/logo.jpg') ?>"  height="50px" width="50px"alt="">Pub'loc</a>
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


<li class="parent ">
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
				<li class="active"><a href="<?php echo base_url() ?>index.php/RegisseurControlleur/ajout_panneau"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></use></svg>..Liste des Panneaux</a></li>

			</ol>
		</div><!--/.row-->



		<div class="row">

      <div class="container">
          <div class="table-responsive">
            <br><center>
              <a href="<?php echo base_url() ?>index.php/RegisseurControlleur/list/<?php echo $_SESSION['ID_REGISSEUR']; ?>" class="btn btn-info">Tous les Emplacements</a> || <a href="<?php echo base_url() ?>index.php/RegisseurControlleur/disponible/<?php echo $_SESSION['ID_REGISSEUR']; ?>" class="btn btn-info">Emplacements Disponibles</a>||<a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur/historique/<?php echo $_SESSION['ID_REGISSEUR'];?>" class="btn btn-danger">Historique Emplacements</a>
            <center><br>
            <table class="table table-bordered   table-striped" style="margin-top:100px">
              <thead class="table__head">
                <tr class="winner__table">
                  <th>Id Panneau</th>
                  <th>Nom Client</th>
                  <th>Prenom Client</th>
                  <th>Debut</th>
                  <th>Fin</th>
                </tr>
              </thead>
              <tbody>
                <?php if((sizeof($historiques))>0){
                foreach($historiques as $historique){
                ?>
                <td><?php echo $historique->ID_PANNEAU; ?></td>
                <td><?php echo $historique->NOM_CLIENT; ?></td>
                <td><?php echo $historique->PRENOM_CLIENT; ?></td>
                <td><?php echo $historique->debut; ?></td>
                <td><?php echo $historique->fin; ?></td>
              </tbody>
              <?php
              }
              }else{ ?>
              <p>Aucun historique !</p>
              <?php } ?>
              </table>
  		</div>
  	</div>	<!--/.main-->


	<script src="<?php echo base_url('assets/test/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap-datepicker.js') ?>"></script>
</body>

</html>
