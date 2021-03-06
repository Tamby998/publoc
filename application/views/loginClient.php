<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login-Client</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/loginClient/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/"vendor/css-hamburgers/hamburgers.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/vendor/select2/select2.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/loginClient/css/main.css') ?>">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url() ?>index.php/loginClient">
					<span class="login100-form-title p-b-55">
						Connexion - Client
					</span>
          <?php if(isset($error)) { echo $error; }; ?>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="EMAIL_CLIENT" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="MOT_DE_PASS" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							S'identifier
						</button>
					</div>
					<div class="container-login100-form-btn p-t-25">
						<a class="login100-form-btn" href="<?php echo base_url() ?>index.php/Welcome">Accueil</a>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							<a href="#">Mot de passe oublier</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/loginClient/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/loginClient/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/loginClient/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/loginClient/js/main.js') ?>"></script>

</body>
</html>
