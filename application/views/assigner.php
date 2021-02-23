<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assigner Emplacement</title>

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

/*custom font*/
@import url(import url here);

body {
/*font: normal 1em 'font';*/
background-color: grey;
}


#section1 {
height: 30em;
}


/* Multi-Step Form */
* {
box-sizing: border-box;
}

#regForm {
background-color: #fff;
margin: 100px auto;
font-family: Raleway;
padding: 40px;
width: 100%;
min-width: 600px;
}

h1 {
text-align: center;
}

select, input {
padding: 10px;
width: 100%;
font-size: 17px;
font-family: Raleway;
border: 1px solid #aaaaaa;
}

/* Mark input boxes that get errors during validation: */
input.invalid {
background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
display: none;
}

button {
background-color: #4CAF50;
color: #ffffff;
border: none;
padding: 10px 20px;
font-size: 17px;
font-family: Raleway;
cursor: pointer;
}

button:hover {
opacity: 0.8;
}

#prevBtn {
background-color: #bbbbbb;
}

/* Step marker: Place in the form. */
.step {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbbbbb;
border: none;
border-radius: 50%;
display: inline-block;
opacity: 0.5;
}

.step.active {
opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
background-color: #4CAF50;
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
				<a class="navbar-brand" href="#"><span>Publoc</span>Regisseur</a>
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


	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active"><a href="<?php echo base_url() ?>index.php/homeRegisseurControlleur"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>..Acceuil</a></li>

			</ol>
		</div><!--/.row-->


		<div class="row">
    <main class="content" role="content">

      	<section id="section1">
      		<div class="container-fluid col-md-6 col-md-offset-3">

      <!-- MultiStep Form -->
      <form id="regForm" action="<?php echo base_url() ?>index.php/RegisseurControlleur/assigner_pa" method="post">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <h1>Etape 1 : Concernant l’emplacement </h1>
          <div class="form-gp">
            <input type="hidden" name="txt_hidden" id="ID_PANNEAU" value="<?php echo $panneau->ID_PANNEAU; ?>">
            <label id="dropdown-label">
              <p>Type Panneau:</p>
            </label>
            <select name="TYPE" id='TYPE' required >
              <option id="<?php echo $panneau->TYPE; ?>" value="<?php echo $panneau->TYPE; ?>"><?php echo $panneau->TYPE; ?></option>
            </select>
          </div><br>
          <p>Nom Client :</p>
          <select name="ID_CLIENT2" id='ID_CLIENT2' required >
            <option value="">Veuillez Selectionner le Nom du Client</option>
            <?php if((sizeof($lists))>0){
              foreach($lists as $client){
                ?>
            <option id="<?php echo $client->ID_CLIENT2; ?>" value="<?php echo $client->ID_CLIENT2; ?>"><?php echo  $client->NOM_CLIENT; ?></option>
            <?php
          }
        }else{ ?>
          <h1>Aucun ID_REGISSEUR recuperer</h1>
        <?php } ?>
          </select>
          <p>Longueur:</p>
          <p><input type="number" id="LARGEUR" name="LARGEUR" max="20" min="1" value="<?php echo $panneau->LARGEUR; ?>" placeholder="Longueur ..." required /></p>
          <p>Largeur :</p>
          <p><input type="number" id="LONGUEUR" name="LONGUEUR" max="20" min="1" value="<?php echo $panneau->LONGUEUR; ?>" placeholder="Largeur ..." required /></p>
          </div>
        <div class="tab">
          <h1>Etape 2 : Localisation </h1>
          <p>Adresse Exacte :</p>
          <p><input type="text" id="ADRESSE" name="ADRESSE" value="<?php echo $panneau->ADRESSE; ?>" placeholder="Adresse ..." required /></p>
          <div class="form-gp">
            <label id="email-label"><p>Email</p></label>
            <select class="form-control" name="ID_REGISSEUR" id="ID_REGISSEUR" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $_SESSION['ID_REGISSEUR']; ?>"><?php echo $_SESSION['EMAIL_REGISSEUR']; ?></option>
            </select>
          </div><br>
          <div class="form-gp">
            <label id="email-label"><p>ID Emplacement</p></label>
            <select class="form-control" name="ID_PANNEAU" id="ID_PANNEAU" onkeypress="refuserToucheEntree(event);" required>
              <option value="<?php echo $panneau->ID_PANNEAU; ?>"><?php echo $panneau->ID_PANNEAU; ?></option>
            </select>
          </div><br>
          <div class="form-gp">
          <label id="fav-label">
            <p>Ville :</p>
          </label>
          <select  class="form-control" name="VILLE" id='VILLE' required>
            <option id="<?php echo $panneau->VILLE; ?>" value="<?php echo $panneau->VILLE; ?>"><?php echo $panneau->VILLE; ?></option>
          </select></div>
          <br>
          <div class="form-gp">
            <label><p>Longitude :</p></label>
            <input type="number" value="<?php echo $panneau->LOGITUDE; ?>" id="LOGITUDE" name="LOGITUDE" placeholder="Longitude ..." required />
          </div>
          <div class="form-gp">
            <label><p>Latitude</p></label>
            <input type="number" id="LATITUDE" value="<?php echo $panneau->LATITUDE; ?>" name="LATITUDE" placeholder="Latitude ..." required />
          </div>
        </div>
        <div class="tab">
          <h1>Etape 3 : les services proposés </h1>
          <div class="form-gp">
            <label id="number-label">
              <p>Nombre de lumières :
              </p>
            </label>
            <input type="number" value="<?php echo $panneau->LUMIERE; ?>" id="LUMIERE" name="LUMIERE" max="20" min="1" placeholder="Nombre de Lumiere..." required />
          </div><br>
          <div class="form-gp">
            <label id="number-label">
              <p>Nombre de Face :
              </p>
            </label>
            <input type="number" value="<?php echo $panneau->FACE; ?>" id="FACE" name="FACE" max="2" min="1" placeholder="Nombre de Faces ..." required />
          </div><br>
          <div class="form-gp">
            <label id="fav-label">
              <p>Habillage :</p>
            </label>
            <select name="HABILLAGE" id='HABILLAGE' required>
              <option id="<?php echo $panneau->HABILLAGE; ?>" value="<?php echo $panneau->HABILLAGE; ?>"><?php echo $panneau->HABILLAGE; ?></option>
            </select>
          </div><br>
          <div class="form-gp">
            <label id="dropdown-label">
              <p>Services optionnel :</p>
            </label>
            <select name="SERVICE" id='SERVICE' required >
              <option id="<?php echo $panneau->SERVICE; ?>" value="<?php echo $panneau->SERVICE; ?>"><?php echo $panneau->SERVICE; ?></option>
            </select>
          </div>
        </div>
        <div class="tab">
          <h1>Etape 4 : Tarifications </h1>
          <p>Description et consigne :</p>
          <p><input type="text" id="DESCRIPTION" name="DESCRIPTION"  value="<?php echo $panneau->DESCRIPTION; ?>" required /></p><br>

          <div class="form-gp">
            <label id="fav-label">
              <p>Status du Panneau :</p>
            </label>
            <select name="STATUS" id='STATUS' required>
              <option id="<?php echo $panneau->STATUS; ?>" value="<?php echo $panneau->STATUS; ?>"><?php echo $panneau->STATUS; ?></option>
            </select>
          </div><br>
        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>
      <!-- /.MultiStep Form -->

      		</div>
      	</section>

      </main> <!-- /content -->




		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="<?php echo base_url('assets/test/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/chart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/test/js/bootstrap-datepicker.js') ?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {

    // Random Alert shown for the fun of it
    	function randomAlert() {
    		var min = 5,
    			max = 20;
    		var rand = Math.floor(Math.random() * (max - min + 1) + min); //Generate Random number between 5 - 20
    		// post time in a <span> tag in the Alert
    		$("#time").html('Next alert in ' + rand + ' seconds');
    		$('#timed-alert').fadeIn(500).delay(3000).fadeOut(500);
    		setTimeout(randomAlert, rand * 1000);
    	};
    	randomAlert();
    });


$('.btn').click(function(event) {
  event.preventDefault();
  var target = $(this).data('target');
// console.log('#'+target);
$('#click-alert').html('data-target= ' + target).fadeIn(50).delay(3000).fadeOut(1000);

});


// Multi-Step Form
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
// This function will display the specified tab of the form...
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
//... and fix the Previous/Next buttons:
if (n == 0) {
  document.getElementById("prevBtn").style.display = "none";
} else {
  document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
  document.getElementById("nextBtn").innerHTML = "Submit";
} else {
  document.getElementById("nextBtn").innerHTML = "Next";
}
//... and run a function that will display the correct step indicator:
fixStepIndicator(n)
}

function nextPrev(n) {
// This function will figure out which tab to display
var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
if (n == 1 && !validateForm()) return false;
// Hide the current tab:
x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
currentTab = currentTab + n;
// if you have reached the end of the form...
if (currentTab >= x.length) {
  // ... the form gets submitted:
  document.getElementById("regForm").submit();
  return false;
}
// Otherwise, display the correct tab:
showTab(currentTab);
}

function validateForm() {
// This function deals with validation of the form fields
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
for (i = 0; i < y.length; i++) {
  // If a field is empty...
  if (y[i].value == "") {
    // add an "invalid" class to the field:
    y[i].className += " invalid";
    // and set the current valid status to false
    valid = false;
  }
}
// If the valid status is true, mark the step as finished and valid:
if (valid) {
  document.getElementsByClassName("step")[currentTab].className += " finish";
}
return valid; // return the valid status
}

function fixStepIndicator(n) {
// This function removes the "active" class of all steps...
var i, x = document.getElementsByClassName("step");
for (i = 0; i < x.length; i++) {
  x[i].className = x[i].className.replace(" active", "");
}
//... and adds the "active" class on the current step:
x[n].className += " active";
}
  </script>
</body>

</html>
